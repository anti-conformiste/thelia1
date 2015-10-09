<?php
/*************************************************************************************/
/*                                                                                   */
/*      Thelia	                                                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*		email : info@thelia.net                                                      */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      This program is free software; you can redistribute it and/or modify         */
/*      it under the terms of the GNU General Public License as published by         */
/*      the Free Software Foundation; either version 3 of the License                */
/*                                                                                   */
/*      This program is distributed in the hope that it will be useful,              */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of               */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                */
/*      GNU General Public License for more details.                                 */
/*                                                                                   */
/*      You should have received a copy of the GNU General Public License            */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.         */
/*                                                                                   */
/*************************************************************************************/
require_once __DIR__ . "/../fonctions/autoload.php";

class Declidisp extends Baseobj{

	public $id;
	public $declinaison;

	const TABLE="declidisp";
	public $table=self::TABLE;

	public $bddvars = array("id", "declinaison");

	public function __construct($id = 0){
		parent::__construct();

		if($id > 0)
			 $this->charger($id);
	}

	public function charger($id){
		return $this->getVars("select * from $this->table where id=\"$id\"");

	}


	public function delete() {

		if (! empty($this->id)) {

			$this->delete_cascade('Declidispdesc', 'declidisp', $this->id);

			parent::delete();
		}
	}
}
?>