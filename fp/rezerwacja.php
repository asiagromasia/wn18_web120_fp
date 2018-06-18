 <?php include "includes/header.php"?>
 <!--END header.php include here!-->

<!-- below is reservation from w3 
<div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Od:</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM RRRR" name="CheckIn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Do: </label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM RRRR" name="CheckOut" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Dorosli:</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Dzieci </label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Szukaj </button>
      </form>
    </div> -->

<?php include "includes/multiple.php";?>
<p class="clear-recaptcha"></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h4>Płatność przelewem:</h4>
    <p>PLN: 251160 2202 0000 0003 5181 9936<br />
        EURO: PL <br />
        Swift/BIC: <br/>
        W tytule przelewu proszę napisać: Zaliczka za rezerwację w nastepujacym terminie oraz imię i nazwisko
    </p>
    
    Honorujemy nastepujace karty płatnicze:<br>
       <img src="images/cc.png" class='cc' alt="cc"> 

</aside>
<!-- END RIGHT COL -->
 <?php include 'includes/footer.php' ?>
