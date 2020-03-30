<?php $this->beginContent('//layouts/main'); ?>
<style media="screen">
    .form-control {
        height: auto;
        min-height: 34px;
    }
    .errorMessage {
        color: #ff0;
        text-shadow: 0px 0px 1px #666;
    }
</style>
<body class="hold-transition login-page">
    <?php echo $content; ?>
    <div id="logoTelkom"></div>
    <div id="footerLogin">
        Copyright &copy; <?php echo date('Y'); ?> - PT. Telekomunikasi Indonesia, Tbk.<br>
    </div>
</body>
<?php $this->endContent(); ?>
