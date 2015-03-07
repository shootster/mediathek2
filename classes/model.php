<?php
/**
 * Klasse für den Datenzugriff
 */
class Model{

	//Einträge eines Blogs als zweidimensionales Array
	private static $mainmenu = array(
		array("id"=>0, "title"=>"Filme hinzufügen", "content"=>"movie"),
		array("id"=>1, "title"=>"Serien hinzufügen", "content"=>"show"),
		array("id"=>2, "title"=>"Mediathek ansehen", "content"=>"mediathek")
	);

	/**
	 * Gibt alle Einträge des Blogs zurück.
	 *
	 * @return Array Array von Blogeinträgen.
	 */
	public static function getEntries(){
		return self::$mainmenu;
	}

	/**
	 * Gibt einen bestimmten Eintrag zurück.
	 *
	 * @param int $id Id des gesuchten Eintrags
	 * @return Array Array, dass einen Eintrag repräsentiert, bzw. 
	 * 					wenn dieser nicht vorhanden ist, null.
	 */
	public static function getEntry($id){
		if(array_key_exists($id, self::$mainmenu)){
			return self::$mainmenu[$id];
		}else{
			return null;
		}
	}
}
?>