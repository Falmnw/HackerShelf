


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-apk-hci.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.vercel.app/geist/1.0.0/geist.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-footer.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="<?php echo e(asset('assets/images/logo-apk-hci.png')); ?>" class="logo-img" alt="HackerShelf Logo">
    </div>

    <ul class="menu">
      <?php if(Route::currentRouteName() !== 'seeHome'): ?>
        <li><a href="<?php echo e(route('seeHome')); ?>">Home</a></li>
      <?php endif; ?>
      <li><a href="<?php echo e(route('seeHome')); ?>#categoryCarousel">Tools</a></li>
      
      <li><a href="<?php echo e(route('about')); ?>">About</a></li>
    </ul>
    
    <div class="navbar-right">
      <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->role === 'admin'): ?>
          <div style="position: relative;">
            <a href="<?php echo e(route('catalogue')); ?>" class="profile-btn">
              <?php
                $newToolsCount = \App\Models\Product::where('status', 'pending')->count();
              ?>
              <?php if($newToolsCount > 0): ?>
                <span class="badge badge-danger">+<?php echo e($newToolsCount); ?></span>
              <?php endif; ?>
              <i class="fas fa-cog"></i> Admin Panel
            </a>
          </div>
        <?php endif; ?>
        <a href="<?php echo e(route('profile')); ?>" class="profile-btn">
          <i class="fas fa-user"></i> Profile
        </a>
        <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline;">
          <?php echo csrf_field(); ?>
          <button type="submit" class="profile-btn" style="border: none; background: none; cursor: pointer; padding: 12px 18px;">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
      <?php endif; ?>
      
      <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('seeLogin')); ?>" class="profile-btn">
          <i class="fas fa-user"></i> Login
        </a>
      <?php endif; ?>
    </div>
  </nav>

  <?php echo $__env->yieldContent('content'); ?>

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
            <li><a href="<?php echo e(route('showCategory', 1)); ?>">Forensic</a></li>
            <li><a href="<?php echo e(route('showCategory', 2)); ?>">Binary Exploitation</a></li>
            <li><a href="<?php echo e(route('showCategory', 3)); ?>">OSINT</a></li>
            <li><a href="<?php echo e(route('showCategory', 4)); ?>">Reverse Engineer</a></li>
            <li><a href="<?php echo e(route('showCategory', 5)); ?>">Cryptography</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Section</h4>
          <ul>
            <li><a href="<?php echo e(route('seeHome')); ?>#categoryCarousel">Tools</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\Asus\OneDrive\Documents\Kuliah\Semester5\HCI\HackerShelf\resources\views/layout/master.blade.php ENDPATH**/ ?>