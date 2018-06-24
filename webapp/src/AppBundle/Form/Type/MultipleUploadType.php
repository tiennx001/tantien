<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MultipleUploadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['template'] = $this->getTemplate($options);
        $view->vars['object_id'] = $options['object_id'];
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $template = '
	      <table width="100%">
	        <tr>
	          <td align="left" style="overflow: hidden;">%file%</td>
	        </tr>
	        <tr>
            <td>
            <input type="checkbox" name="delete-file">
            <label for="delete-file">Xóa ảnh cũ</label>
            &nbsp;&nbsp;%radio%
            </td>
          </tr>
	        <tr>
	          <td>%input%</td>
	        </tr>
	      </table>
	      %javascripts%
	      %stylesheets%
	    ';

        $resolver->setDefaults(array(
            'is_image' => true,
            'colors' => '',
            'router' => '',
            'file_src' => '',
            'template' => $template,
            'style' => '',
            'csrf_token' => '',
            'action' => '',
            'delete_action' => '',
            'object_id' => ''
        ));
    }

    private function getTemplate(array $options)
    {
        $input = '<span id="fileupload" data-url="'.$options['router']->generate('upload_multiple_file', array('id' => $options['object_id'],'_sonata_admin' => 'admin.product')).'">
          <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
          <div class="fileupload-buttonbar">
              <div class="col-lg-7">
                  <!-- The fileinput-button span is used to style the file input field as button -->
                  <span class="btn btn-success fileinput-button">
                      <i class="glyphicon glyphicon-plus"></i>
                      <span>Add files...</span>
                      <input type="file" name="files[]" multiple>
                  </span>
                  <button type="submit" class="btn btn-primary start">
                      <i class="glyphicon glyphicon-upload"></i>
                      <span>Start upload</span>
                  </button>
                  <button type="reset" class="btn btn-warning cancel">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                      <span>Cancel upload</span>
                  </button>
                  <!-- <button type="button" class="btn btn-danger delete">
                      <i class="glyphicon glyphicon-trash"></i>
                      <span>Delete</span>
                  </button>
                  <input type="checkbox" class="toggle"> -->
                  <!-- The global file processing state -->
                  <span class="fileupload-process"></span>
              </div>
              <!-- The global progress state -->
              <div class="col-lg-5 fileupload-progress fade">
                  <!-- The global progress bar -->
                  <div class="progress progress-animated active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar progress-bar-success" style="width:0%; height:100%;"></div>
                  </div>
                  <!-- The extended global progress state -->
                  <div class="progress-extended">&nbsp;</div>
              </div>
          </div>
          <!-- The table listing the files available for upload/download -->
          <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </span>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <!-- The template to display files available for upload -->
        <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-animated active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%; height:100%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?\'data-gallery\':\'\'%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields=\'{"withCredentials":true}\'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <script type="text/javascript">
            $(\'.btn-remove\').on(\'click\', function () {
            var c = confirm(\'Bạn có chắc chắn muốn xóa không?\');
            var $this = $(this);
            if (c) {
                $.ajax({
                    url: $this.attr(\'data-url\'),
                    type: \'POST\',
                    success: function (response) {
                        if (response.errorCode == \'0\') {
                            $this.parents(\'.image-wrapper\').remove();
                        }
                        alert(response.message);
                    }
                });
            }
            });
        </script>
        ';

        $radio = '';
        foreach ($options['colors'] as $key => $value) {
            $checked = $key == 0 ? 'checked' : '';
            $style = 'background-color: #' . $value->getHexCode() . ';width: 20px; height: 20px; border-radius: 10px; display: inline-block; margin-bottom: -6px; margin-right: 10px; border:solid 1px #ddd';
            $radio .= '<input ' . $checked . ' name="file-color" type="radio" value="' . $value->getId() . '" /><div title="' . $value->getName() . '" style="' . $style . '"></div>';
        }

        return strtr($options['template'], array('%input%' => $input, '%file%' => $this->getFileAsTag($options), '%radio%' => $radio, '%javascripts%' => $this->getJavascriptsTemplate(), '%stylesheets%' => $this->getStylesheetsTemplate()));
    }

    private function getJavascriptsTemplate() {
        $html = '';
        foreach ($this->getJavascripts() as $src) {
            $html .= '<script src="' . $src . '"></script>';
        }
        return $html;
    }

    private function getStylesheetsTemplate() {
        $html = '';
        foreach ($this->getStylesheets() as $src) {
            $html .= '<link rel="stylesheet" href="' . $src . '">';
        }
        return $html;
    }

    public function getJavascripts()
    {
        return array(
            '//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js',
            '//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js',
            '//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js',
            '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.iframe-transport.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.fileupload.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.fileupload-process.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.fileupload-image.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.fileupload-validate.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/jquery.fileupload-ui.js',
            '/bundles/app/jQuery-File-Upload-9.12.5/js/main.js'
        );
    }

    public function getStylesheets()
    {
        return array(
            '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css',
            '/bundles/app/jQuery-File-Upload-9.12.5/css/jquery.fileupload.css',
            '/bundles/app/jQuery-File-Upload-9.12.5/css/jquery.fileupload-ui.css',
            '/bundles/app/jQuery-File-Upload-9.12.5/css/style.css',
            '/bundles/app/css/styles.css'
        );
    }

    protected function getFileAsTag(array $options)
    {
        if ($options['is_image'] && $options['file_src']) {
            $html = '';
            $colorArr = $options['file_src'];

            foreach ($colorArr as $key => $color) {
                $colorImages = $color->getImages();
                $fileArr = $colorImages ? json_decode(htmlspecialchars_decode($colorImages), true) : array();
                foreach ($fileArr as $file) {
                    $params = array(
                        'src' => $file,
                        'width' => 100,
                        'height' => 100,
                    );
                    if ($options['style']) {
                        $params['style'] = $options['style'];
                    }

                    $img = $this->renderTag('img', $params);
                    $vtColor = $color->getColor();
                    $span = '<span>' . $img . '<a title="Xóa" class="btn-remove" data-url="'.$options['router']->generate('delete_uploaded_file',
                            array('id' => $options['object_id'], 'index' => $vtColor->getId(), 'image' => $file, '_csrf_token' => $options['csrf_token'], '_sonata_admin' => 'admin.product')).'">
                            <i class="fa fa-trash-o"></i></a></span>';
                    $divStyle = 'display: inline-block; background-color: #%color%; width: 20px; height: 20px; margin: 0px 0px 32px -22px; border-radius: 9px;';
                    $divStyle = str_replace('%color%', $vtColor->getHexCode(), $divStyle);
                    $divParams = array(
                        'style' => $divStyle
                    );
                    $div = $this->renderContentTag('div', null, $divParams);
                    $html .= false !== $file ? '<div class="image-wrapper">' . $span . $div . '</div>' : '';
                }
            }
            return $html;
        } else {
            return '';
        }
    }

    protected static
        $xhtml   = true,
        $charset = 'UTF-8';

    /**
     * Renders a HTML tag.
     *
     * @param string $tag         The tag name
     * @param array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
     *
     * @param string An HTML tag string
     */
    public function renderTag($tag, $attributes = array())
    {
        if (empty($tag))
        {
            return '';
        }

        return sprintf('<%s%s%s', $tag, $this->attributesToHtml($attributes), self::$xhtml ? ' />' : (strtolower($tag) == 'input' ? '>' : sprintf('></%s>', $tag)));
    }

    /**
     * Renders a HTML content tag.
     *
     * @param string $tag         The tag name
     * @param string $content     The content of the tag
     * @param array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
     *
     * @param string An HTML tag string
     */
    public function renderContentTag($tag, $content = null, $attributes = array())
    {
        if (empty($tag))
        {
            return '';
        }

        return sprintf('<%s%s>%s</%s>', $tag, $this->attributesToHtml($attributes), $content, $tag);
    }

    /**
     * Converts an array of attributes to its HTML representation.
     *
     * @param  array  $attributes An array of attributes
     *
     * @return string The HTML representation of the HTML attribute array.
     */
    public function attributesToHtml($attributes)
    {
        return implode('', array_map(array($this, 'attributesToHtmlCallback'), array_keys($attributes), array_values($attributes)));
    }

    /**
     * Prepares an attribute key and value for HTML representation.
     *
     * It removes empty attributes, except for the value one.
     *
     * @param  string $k  The attribute key
     * @param  string $v  The attribute value
     *
     * @return string The HTML representation of the HTML key attribute pair.
     */
    protected function attributesToHtmlCallback($k, $v)
    {
        return false === $v || null === $v || ('' === $v && 'value' != $k) ? '' : sprintf(' %s="%s"', $k, $this->escapeOnce($v));
    }

    /**
     * Escapes a string.
     *
     * @param  string $value  string to escape
     * @return string escaped string
     */
    static public function escapeOnce($value)
    {
        return self::fixDoubleEscape(htmlspecialchars(!is_array($value) ? (string) $value : null, ENT_QUOTES, self::getCharset()));
    }

    /**
     * Fixes double escaped strings.
     *
     * @param  string $escaped  string to fix
     * @return string single escaped string
     */
    static public function fixDoubleEscape($escaped)
    {
        return preg_replace('/&amp;([a-z]+|(#\d+)|(#x[\da-f]+));/i', '&$1;', $escaped);
    }

    /**
     * Returns the charset to use when rendering widgets.
     *
     * @return string The charset (defaults to UTF-8)
     */
    static public function getCharset()
    {
        return self::$charset;
    }
}