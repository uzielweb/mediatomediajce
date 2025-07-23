<?php
defined('_JEXEC') or die;

use Joomla\CMS\Form\Form;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Form\FormHelper;

class PlgSystemMediatomediajce extends CMSPlugin
{
    protected static $processed = [];

    public function onContentPrepareForm(Form $form, $data)
    {
        $formName = (string) $form->getName();

        // Evita reprocessamento do mesmo formul��rio
        if (isset(self::$processed[$formName])) {
            return true;
        }
        self::$processed[$formName] = true;

        // Verifica se o diret��rio do campo existe
        $fieldPath = JPATH_PLUGINS . '/fields/mediajce/fields';
        if (!is_dir($fieldPath)) {
            return true;
        }

        // Registra o caminho dos campos personalizados
        FormHelper::addFieldPath($fieldPath);

        $xml = $form->getXml();

        // Garante que <fields> tenha addfieldpath para mediajce
        foreach ($xml->xpath('//fields') as $fieldsTag) {
            $currentPath = (string) $fieldsTag['addfieldpath'];
            if (strpos($currentPath, 'plugins/fields/mediajce/fields') === false) {
                $fieldsTag['addfieldpath'] = trim($currentPath . ',plugins/fields/mediajce/fields', ',');
            }
        }

        // Substitui todos os campos <field type="media" />
        $mediaFields = $xml->xpath('//field[@type="media"]');

        if (!$mediaFields || count($mediaFields) === 0) {
            return true;
        }

        foreach ($mediaFields as $field) {
            $field['type'] = 'mediajce';
            $field['editor'] = 'jce';
            $field['modal'] = 'true';

            // Permite que o diret��rio seja definido, ou usa padr�0�0o 'media' para arquivos gen��ricos
            if (!isset($field['directory'])) {
                $field['directory'] = 'media';
            }

    // Aqui o atributo que define os tipos de m��dia aceitos
    $field['mediatype'] = 'files';  // aceita qualquer tipo de arquivo
            // Opcional: aceita qualquer tipo de arquivo
      

            // Opcional: para desabilitar filtro restrito s�� para imagens, se seu campo mediajce suporta
            // $field['filter'] = ''; // ou um filtro personalizado
        }

        return true;
    }
}
