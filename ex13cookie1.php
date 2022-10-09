<?php 

// cookie create
// setcookie('phone','11111',time()+ 60);   // a nout sone ka expire time pay lite dar  60 seconds lot
// setcookie('phone','11111',time()+ 60 * 60);  // 1 hour expire pay lite dar 
//setcookie('phone','11111',time()+ 60 * 60 * 24);  // for 1 day
setcookie('phone','11111', time()+ 10); 

echo "cookie create successful";