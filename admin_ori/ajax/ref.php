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
require_once(__DIR__ . "/../pre.php");
require_once(__DIR__ . "/../auth.php");

require_once(__DIR__ . "/../../fonctions/divers.php");

if(! est_autorise("acces_catalogue")) exit; 

header('Content-Type: text/html; charset=utf-8');
$ref = $_GET["ref_c"];

$produit = new Produit();
if($produit->charger($ref)){
	?>
		<div class="confirmation_ref"><img src="gfx/interdiction.png" /></div>
		<input type="hidden" id="confirm_ref" value="0">
	<?php
}
elseif($ref!=""){
	?>
		<div class="confirmation_ref"><img src="gfx/validation.png" /></div>
		<input type="hidden" id="confirm_ref" value="1">
	<?php
}

?>
