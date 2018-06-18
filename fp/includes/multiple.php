<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "joanna.gromadzka@seattlecentral.edu";  //place your/your client's email address here
$toName = "U Irenki"; //place your client's name here
$website = "u Irenki";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
      <h4>Twoja rezerwacja zostala wyslana! Prosimy o przelew na podane konto</h4>
        <h5>Dziekujemy!</h5>
        <p>Potwierdzenie zostanie wyslane na podany adres emailowy.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
<div class="rezerwacja">	
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label>
                Imię:<br /><input type="text" name="Name" required="required" placeholder="Imię i nazwisko (wymagane)" title="Name is required" tabindex="10" size="44" autofocus />
            </label>
        </div>
        <div>	
            <label>
                Email:<br /><input type="email" name="Email" required="required" placeholder="Email (wymagany)" title="A valid email is required" tabindex="20" size="44" />
            </label>
        </div>

        <div>
            <label>
                Ktory apartament chcesz zarezerwowac?<br />
                <select name="Ktory apartament chcesz zarezerwowac?" required="required" title="How You Heard is required" tabindex="30">
                    <option value="">Wybierz</option>
                    <option value="Apt1syp">Apartament z 1 sypialnia</option>
                    <option value="Apt2syp">Apartament z 2 sypialniami</option>
                </select>
            </label>
        </div>
	       <div>
                <label><i class="fa fa-calendar-o"></i> Od:</label>
                <input class="od:" type="text" placeholder="DD MM RRRR" name="CheckIn" required>
        
                <label><i class="fa fa-calendar-o"></i> Do: </label>
                <input class="do:" type="text" placeholder="DD MM RRRR" name="CheckOut" required>
          </div>
        
         <div>	
            <label>
                Jak sie o nas dowiedziales?<br />
                <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
                    <option value="">Wybierz</option>
                    <option value="Web">Internet</option>
                    <option value="Magazine">Ponowny pobyt</option>
                    <option value="A Friend">Od przyjaciol</option>
                    <option value="Other">Inna opcja</option>
                </select>
            </label>
        </div>
        <div>	
            <label>
                Wiadomosc:<br /><textarea name="Wiadomosc" cols="36" rows="4" placeholder="Prosze napisac jesli chcialbys zarezerwowac rowery." tabindex="60"></textarea>
            </label>
        </div>	
        <div><?=$feedback?></div>
        <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
        <div>
            <input type="submit" value="Wyslij" />
        </div>
    </form>
	<!-- END HTML FORM -->
    <script 
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
</div>     
<?php
}
?>
