<?php
/**
 * @Author		I am Bored So I Blog
 * @version		1.0
 * @copyright	Theo van der Sluijs / IAMBOREDSOIBLOG.eu
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * 
 *
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$Blink 	 = $params->get( 'Blink' );

$document = &JFactory::getDocument();

$document->addStyleSheet( JURI::root(true). '/modules/mod_calculator_plus/tmpl/calc_style.css' );
$document->addScript( JURI::root(true). '/modules/mod_calculator_plus/js/mod_calc.js' );

require(JModuleHelper::getLayoutPath('mod_calculator_plus'));