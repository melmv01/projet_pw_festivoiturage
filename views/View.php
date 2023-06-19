<?php
class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view' . $action . '.php';
    }

    //fontion permettant de générer et d'afficher la vue

    public function generate($data)
    {
        //partie spécifique de la vue
        $content = $this->generateFile($this->_file, $data);

        // template
        $view = $this->generateFile('views/template.php', array(
            't' => $this->_t,
            'content' => $content
        ));

        echo $view;
    }

    public function refresh()
    {
        //partie spécifique de la vue
        $content = null;

        // template
        $view = $this->generateFile('views/template.php', array(
            't' => $this->_t,
            'content' => $content
        ));
        ob_end_clean();

        echo $view;
    }



    //génère un fichier vue et renvoie le resultat
    private function generateFile($file, $data)
    {
        if (file_exists($file)) {
            extract($data);

            //temporisation (mise en tampon)

            ob_start();

            require $file;
            return ob_get_clean();
        } else
            throw new Exception('Fichier ' . $file . ' introuvale');
    }
}
