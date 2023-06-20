<?php include 'header.php';?>

<div class="row" >
      <img src="img/iletisim.jpg" class="responsive-img" id="banner">
      <h5 class="sayfabaslik"> / İletişim</h5>
    </div>

    <div class="containerrs">

<div class="col s12 l6 m6">
  <div class="form-container">

    <h4>İletişim Formu</h4>
    <form action="mailer.php" method="post">

      <div class="input-field">
        <input type="text" id="ad" name="ad" required>
        <label for="ad">Ad</label>
      </div>

      <div class="input-field">
        <input type="text" id="soyad" name="soyad" required>
        <label for="soyad">Soyad</label>
      </div>

    <div class="input-field">
      <input type="tel" id="telefon" name="telefon" required>
      <label for="telefon">Telefon Numarası</label>
    </div>

    <div class="input-field">
      <textarea id="mesaj" name="mesaj" class="materialize-textarea" required></textarea>
      <label for="mesaj">Mesajınız</label>
    </div>

    
    <button class="waves-effect waves-light btn blue" type="submit" name="action">Gönder<i class="material-icons right">send</i></button>

    </form>

  </div>
</div>

<div class="col s12 l6 m6">

  <div class="contact-container">
    <h4>Bize Ulaşın</h4>
    <div class="contact-info"><i class="material-icons">phone</i><a class="aclass">546 111 11 11</a></div>

    <div class="contact-info"><i class="material-icons">location_on</i><a class="aclass">Doğuş Üniversitesi, Esenkent, Dudullu Osb Mah, Nato Yolu Cd 265/ 1, 34775 Ümraniye/İstanbul</a></div>

    <div class="contact-info"><i class="material-icons">email</i><a class="aclass">cbtsigorta@gmail.com</a></div>

    <img src="img/logo.png" class="responsive-img" id="ulas"/>
  </div>

</div>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96363.06969877669!2d29.064254884103377!3d40.99580110406575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac7f63b1068af%3A0xd2bca6ca8c60ef84!2zRG_En3XFnyDDnG5pdmVyc2l0ZXNp!5e0!3m2!1str!2str!4v1686147952529!5m2!1str!2str" width="1920" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include 'footer.php';?>