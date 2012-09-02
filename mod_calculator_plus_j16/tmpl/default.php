<?php // no direct access
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
defined('_JEXEC') or die('Restricted access'); 
?>
<form onsubmit="return false;">
	<div id="modCalc">
			<div id="calinfoout">
				<div class="calinfoinner">
					<input type="text" name="input" size="16" id="calInfoOutPut" onclick="this.focus()" maxlength="16" value="0" readonly>
					<hr>
					<input type="button" value="1" onclick="r(1)" class="calinfonm"><input type="button" value="2" onclick="r(2)" class="calinfonm"><input type="button" value="3" onclick="r(3)" class="calinfonm"><input type="button" value="+" onclick=r("+") class="calinfoop"><input type="button" value="MS" onclick=r("MS") class="calinfoop"><br />
					<input type="button" value="4" onclick="r(4)" class="calinfonm"><input type="button" value="5" onclick="r(5)" class="calinfonm"><input type="button" value="6" onclick="r(6)" class="calinfonm"><input type="button" value="-" onclick=r("-") class="calinfoop"><input type="button" value="M+" onclick=r("M+") class="calinfoop">
					<input type="button" value="7" onclick="r(7)" class="calinfonm"><input type="button" value="8" onclick="r(8)" class="calinfonm"><input type="button" value="9" onclick="r(9)" class="calinfonm"><input type="button" value="*" onclick=r("*") class="calinfoop"><input type="button" value="M-" onclick=r("M-") class="calinfoop">
					<input type="button" value="0" onclick="r(0)" class="calinfonm"><input type="button" value="." onclick=r(".") class="calinfonm"><input type="button" value="EXP" onclick=r("EXP") class="calinfoop"><input type="button" value="/" onclick=r("/") class="calinfoop"><input type="button" value="MR" onclick=r("MR") class="calinfoop"><br />
					<input type="button" value="+/-" onclick=r("+/-") class="calinfoop"><input type="button" value="sqrt" onclick=r("sqrt") class="calinfoop"><input type="button" value="C" onclick=r("C") class="calinfoeq"><input type="button" value="=" onclick=r("=") class="calinfoeq"><input type="button" value="MC" onclick=r("MC") class="calinfoop"><br />
				</div>
			</div>
	</div>
</form>

<?php
if($Blink == 0){
	echo "<div style='font-size:10px; text-align: center;margin-top:10px;'>";
	echo "Created by <a href='http://www.iamboredsoiblog.eu' target='_blank'>IamBoredSoIBlog.eu</a>";
	echo "</div>";
}		
?>