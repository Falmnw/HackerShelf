<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-apk-hci.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.vercel.app/geist/1.0.0/geist.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-footer.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
  <?php echo $__env->yieldContent('content'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>

<footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="<?php echo e(asset('assets/images/logo-apk-hci.png')); ?>" alt="Hackershelf Logo">
      </div>
      <div class="footer-social">
        <a href="#" aria-label="X (Twitter)"><img src="<?php echo e(asset('assets/images/x-logo.png')); ?>" alt="X"></a>
        <a href="#" aria-label="Instagram"><img src="<?php echo e(asset('assets/images/instagram-logo.png')); ?>" alt="Instagram"></a>
        <a href="#" aria-label="YouTube"><img src="<?php echo e(asset('assets/images/youtube-logo.png')); ?>" alt="YouTube"></a>
        <a href="#" aria-label="LinkedIn"><img src="<?php echo e(asset('assets/images/linkedin-logo.png')); ?>" alt="LinkedIn"></a>
      </div>
      <div class="footer-links">
        <div class="footer-column">
          <h4>Category</h4>
          <ul>
            <li><a href="#">Forensic</a></li>
            <li><a href="#">Binary Exploitation</a></li>
            <li><a href="#">OSINT</a></li>
            <li><a href="#">Reverse Engineer</a></li>
            <li><a href="#">Cryptography</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Section</h4>
          <ul>
            <li><a href="#">Tools</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
</body>
</html>
<?php /**PATH C:\Users\Asus\OneDrive\Documents\Kuliah\Semester5\HCI\HackerShelf\resources\views/layout/auth.blade.php ENDPATH**/ ?>