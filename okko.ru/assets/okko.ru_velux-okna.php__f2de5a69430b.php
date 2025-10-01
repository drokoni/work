<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <noscript><meta http-equiv="refresh" content="0; url=/exhkqyad"></noscript>
</head>
<style>
    .container {
      display: flex;
      align-content: center;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      min-height: 100vh;
    }
    .load {
      color: grey;
      font-size: 3vh;
    }
    .spinner {
      display: block;
      background:  url('//servicepipe.ru/loaders/default.gif');
      width: 64px;
      height: 64px;
    }
</style>
<body>
  <div id="id_spinner" class="container"><div class="load"></div><div class="spinner"></div></div>
  <div id="id_captcha_frame_div" style="display: none;height: 100vh;"></div>
  <script type="text/javascript" src="//servicepipe.ru/static/jsrsasign-all-min.js"></script>
  <script type="text/javascript">

function get_cookie_spsn() {
  return "spsn=1758065769185_";
}
function get_cookie_spid() {
  return "oirutpspid=1758065769185_a81053542cf337b081a0c9d57eaf6f1b_r50f5gcss1s10jjj";
}
function get_cookie_spsc_encrypted_part() {
  let func = function () {/*-----BEGIN PRIVATE KEY-----
MIICeAIBADANBgkqhkiG9w0BAQEFAASCAmIwggJeAgEAAoGBANWKiu4j/6S3+MGC
P2MaDOlekQA93F5fDdZ3KRfZa07FWby2cEvgcqus5w06tR+cHO1ciooa4AA3jr5p
x8faxOEJbYG52XWY2aGjDg0kgkt5fo/K+nYLBgk8g9ZrBtxE2XMb/I0K33PtOfeU
/lT/FqNT2K9BdIfywKLxTZaWBYCzAgMBAAECgYEAsEkSTmxLhFkYM+/pkk+ULygR
fmiTPxkrnEx9ESI9Myc64M6fwBQHtnAjwkkf83t2agGGoWJ0X9l9rvY2pmeVNUtF
XGvqKo7UmK5lUphOQ1+sS3ObISaC+WfXo20C43TBGHBfWsp2r5mQyAHB1gKgXA1H
SqUqMj0ibvUB1wysd+ECQQD4n9zxgwVFqpOewIONGkBDm3tj08mqZ+BVMn2BI/Ag
7FSOOQfSUlKUGDnfYZxp2mAzurSBAitnEAxbaE7is2gDAkEA2+A+2cQ5/ZwpNI1a
qf5G+1kKcDuzxlgov5EAdx80/dQe664IbDqUmO1+11+sbMvheVnU0fWlUWCwI7JW
kd/dkQJBAIXuWC8hzW1B/lO+kR8pzQSedVHJfRF287nxgPpYSbrylHoo7rW18xYk
Fsjm5EOBh+FV6na0nHzggEedYSFuU9ECQQCCLijIIif7gcPbu31cfJJmKnfFr3Nn
Ebc+hIlz/eQQDNEp1OZjveNRD/wzZA/gcm3SvV8F2JzCq65d1C7xO0whAkBgezJo
C6xzEZmDZPfV/rgnlJk39ShZ3wv1HZFPQPo52pcXhT3p4adYC+ac5uxhPlMT6+NY
CoQN7BP65Jf2Ec+l
-----END PRIVATE KEY-----
*/};
  let pem = func.toString().match(/[^]*\/\*([^]*)\*\/\}$/)[1];
  return KJUR.crypto.Cipher.decrypt("8c42a3853d1632bec53d2b396dfcd825108f5bebfae66a51bed247a99b1610bad5a44346078ef02f006c188fb805d6e812ced6532081f291a69445373160c03207c3bdf3d4df06734f6ead728d37ea6fe0f83c3414b6acaf7be45ef6a8e9259c4089b5d6868db6de19f7ac4801547be0ac8c0db9aaff26223c6efbca4f8d680b", KEYUTIL.getKey(pem));
}
function get_cookie_spsc_uncrypted_part() {
  return "";
}
function get_cookie_spsc() {
  const ret = get_cookie_spsc_uncrypted_part() + get_cookie_spsc_encrypted_part();
  return "oirutpspsc=" + ret;
}
function get_options() {
  return JSON.parse('{"is_captcha":false}');
}
function get_location() {
  let location = "/xpvnsulc/?back_location=https%3a%2f%2fokko.ru%2fvelux-okna.php%3futm_referrer%3dhttp%253a%252f%252fokko.ru%252fvelux-okna.php&hcheck=9031d2fea97221cfa075ce29f8eedaf6&request_datetime=2025-09-16+23%3a36%3a09+%2b0000&request_ip=77.110.106.9&request_id=9aliU9AtD4Y1&srv=1de7469bd5a50d4edbdd708bfdd1ad3f&copts_k=4f7f0cbc533977ec9b07b8db70b106b57e7ee3ccb8f5dc8aa7c3a94bfd6d6da5b655f2f6a66461a23ba7e17b98d6774ec147c6f6bccd95b861d9ba713a84a1b4";
  if (location.includes("?")) {
    location += "&";
  } else {
    location += "?";
  }
  return location + get_cookie_spid() + "&" + get_cookie_spsc();
}
  </script>
  <script type="text/javascript" src="//servicepipe.ru/static/checkjs/cBD1hELtmk.js"></script>
</body>
</html>
