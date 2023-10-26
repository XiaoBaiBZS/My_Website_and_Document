<!DOCTYPE html>
<html>
<meta charset="utf-8" />
 <script src="//www.recaptcha.net/recaptcha/api.js" async defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="//unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script src="//unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
<body>
 <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
<style>
      #demo-absolute-fab {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 1;
        background-color: #3f51b5;
      }
    
      #mdc-button {
        background-color: #3f51b5;
      }
    </style>
<form action = "w.php" method="GET">
    <h2> 粼光上传 </h1>
    <h6>亲爱的粼光开发者，你好啊，你一定很想分享您精彩绝伦的作品给别人，上架您的应用到粼光吧，一起来~.如遇到问题请QQ联系：424033580 『不支持上传含付费内容和转载软件，别问为什么』</h6>
    <br>

        <label>软件开发者-姓名/昵称:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text"  name = "name" />
  <span class="mdc-line-ripple"></span>
</label>
<p>
        <label>联系方式:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "pwd" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <label>软件名:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text"  name = "m" />
  <span class="mdc-line-ripple"></span>
</label>
<p>
        <label>软件包名:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "bm" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <label>软件介绍 (请填写最多180个字):</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text"  name = "js" />
  <span class="mdc-line-ripple"></span>
</label>
<p>
        <label>软件获取链接:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "lj" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>

        <label>所需权限:<p><h6>每条用|隔开</h6></label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "qx" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <label>软件logo:<p><h6>建议为标准白底/透明+192px×192px</h6></label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "logo" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <label>软件截图:<p><h6>每张用|隔开</h6></label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id"></span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" required="required" type = "text" name = "rj" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <label>软件包体:</label><p>
<label class="mdc-text-field mdc-text-field--filled">
  <span class="mdc-text-field__ripple"></span>
  <span class="mdc-floating-label" id="my-label-id">不开放</span>
  <input class="mdc-text-field__input" type="text" aria-labelledby="my-label-id" type = "" name = "" />
  <span class="mdc-line-ripple"></span><p>
</label>
<p>
        <br/>
        <br/>
    </p>
    
    <!--<input type = "reset"  id = "reset" value = "reset"/>--!>
    <hr style="border: 2px solid grey;"/>
    <form id="" action="?" method="POST">
    <br/>
    <div class="g-recaptcha" style="font-size:4px;" data-sitekey="6Lexfq0iAAAAAKhDZxQncnzX6oo7zGQ63ta07Bh2"></div>
    <button class="mdc-button mdc-button--raised" data-callback="onSubmit" data-sitekey="6Lexfq0iAAAAAKhDZxQncnzX6oo7zGQ63ta07Bh2" name="submit_btn" id = "submit" value = "submit">  <span class="mdc-button__ripple"></span> 提交</button>
    </form>
</form>
    <button class="mdc-fab" id="demo-absolute-fab" aria-label="Favorite">
      <div class="mdc-fab__ripple"></div>
      <span class="mdc-fab__icon material-icons">favorite</span>
    </button>
    <br>
    <script>grecaptcha.execute();</script>

</body>
</html>