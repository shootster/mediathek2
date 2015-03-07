<?php
class default_controller{

	private $request = null;
	private $template = '';
	private $view = null;

	/**
	 * Konstruktor, erstellet den Controller.
	 *
	 * @param Array $request Array aus $_GET & $_POST.
	 */
	public function __construct(){
        //require('models/mediathek.php');
        require('classes/view.php');
        require('classes/model.php');
		$this->view = new View();
//		$this->request = $request;
//		$this->template = !empty($request['view']) ? $request['view'] : 'default';
//        $this->movieTitleSearchTerm = !empty($request['movietitle']) ? $request['movietitle'] : NULL;
	}

	/**
	 * Methode zum anzeigen des Contents.
	 *
	 * @return String Content der Applikation.
	 */
	public function displayAction(){
		$view = new View();
		$entries = Model::getEntries();
		$view->setTemplate('default');
		$view->assign('entries', $entries);
		$this->view->setTemplate('theblog');
		$this->view->assign('blog_title', 'Der Titel des Blogs');
		$this->view->assign('blog_footer', 'Ein Blog von und mit MVC');
		$this->view->assign('blog_content', $view->loadTemplate());
		return $this->view->loadTemplate();
	}

    public function movieAction(){
        $view = new View();
        $view->setTemplate('movie');
        if(!empty($this->movieTitleSearchTerm)){
            var_dump($this->movieTitleSearchTerm);
            //die();
        }
        else{
            $view->assign('content', $entry['content']);
        }
        $view->assign('title', $this->movieTitleSearchTerm);
    }
}
?>