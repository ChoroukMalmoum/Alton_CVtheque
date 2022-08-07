<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <img src="includes/image1.jpg" alt="background image">
    <link rel="stylesheet" href="includes/css/style.css">

  </head>

  <body>


    <form action="includes/candidature.php" method="post" class="form">
      <div class="first">
        <label for="first">Prénom</label><br>
        <input type="text" name="first" class="inputs">
      </div>
      <br>
      <div >
        <label for="last">Nom</label><br>
        <input type="text" name="last" class="inputs">
      </div>
      <br>
      <div class="email">
        <label for="email">Email</label><br>
        <input type="email" name="email" class="inputs">
      </div>

      <br>

      <div class="telephone">
        <label for="telephone">Téléphone</label><br>
        <input type="tel" name="telephone" class="inputs">
      </div>

      <br>

      <div class="motivation">
        <label for="motivation">Texte de motivation</label><br>
        <textarea name="motivation" rows="8"  class="motivationinput"></textarea>
      </div>

      <br>

      <div class="cv">
        <label for="cv">CV</label><br>
        <p class="cvinput"><input type="file" name="cv" class="cvbutton" accept="application/pdf"/></p>
      </div>

      <br>
      <div class="niv">
        <label for="niv">Votre niveau d'étude</label> <br>
        <select  name="niv" class="selectinput" >

            <option value="Choisir">Choisir...</option>
            <option value="Aucun diplome">Aucun diplôme</option>
            <option value="BEP,CAP ou équivalent">BEP,CAP ou équivalent</option>
            <option value="Baccalauréat (bac+0)">Baccalauréat (bac+0)</option>
            <option value="DUT,BTS,Diplôme d'état ou équivalent (bac+2)">DUT,BTS,Diplôme d'état ou équivalent (bac+2)</option>
            <option value="License,Bachelor ou équivalent (bac+3)">License,Bachelor ou équivalent (bac+3)</option>
            <option value="Master 1 ou équivalent (bac+4)">Master 1 ou équivalent (bac+4)</option>
            <option value="Master,Diplôme d'ingénieur ou équivalent (bac+5)">Master,Diplôme d'ingénieur ou équivalent (bac+5)</option>
            <option value="Doctorat et équivalent (>bac+5)">Doctorat et équivalent (>bac+5)</option>



        </select>
      </div>
      <br>
      <div class="exp">
        <label for="exp">Votre expérience</label><br>
        <select  name="exp" class="selectinput">

          <option value="Choisir">Choisir...</option>
          <option value="Aucune expérience">Aucune éxpérience</option>
          <option value="1 an d'éxpérience">1 an d'éxpérience</option>
          <option value="2 ans d'éxpérience">2 ans d'éxpérience</option>
          <option value="3 ans d'éxpérience">3 ans d'éxpérience</option>
          <option value="4 ans d'éxpérience">4 ans d'éxpérience</option>
          <option value="5 ans d'éxpérience">5 ans d'éxpérience</option>
          <option value="+ de 6 ans d'éxpérience">+ de 6 ans d'éxpérience</option>

        </select>
      </div>

      <br>

      <div class="condition">
        <label for="condition">J'ai lu et déclare accepter les  <a href="includes/condition_dutilisation.php">conditions d'utilisation</a></label>
        <input type="checkbox" name="condition" id="checkbox" onclick="enableBtn()" >
      </div>
      <br>

      <button disabled  type="submit" name="submit" id="btn" class="buttonlast">Envoyer ma candidature</button>



    </form>
        <script type="text/javascript">

          function enableBtn() {
            if (document.getElementById("checkbox").checked) {
              document.getElementById('btn').removeAttribute("disabled");
            }
            else {
              document.getElementById("btn").disabled="true";
            }
          }
        </script>




    <br>

  </body>
</html>
