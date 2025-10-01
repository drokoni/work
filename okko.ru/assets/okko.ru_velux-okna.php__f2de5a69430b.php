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
  return "spsn=1759345749533_";
}
function get_cookie_spid() {
  return "oirutpspid=1759345749533_573c07c69b0c8a47c386e4b8509449b5_1eo7x1klbid7v8vw";
}
function get_cookie_spsc_encrypted_part() {
  let func = function () {/*-----BEGIN PRIVATE KEY-----
MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAKyBt/bJcLhvPgX4
0Mgueo1SABk6rGW070XXq+fUsE5ayVRfjW25Wd6aNz4js220a2MFn+rtdnK3uhwj
IqqOeoP1Lkk3IzSjjzw53NIXZAGWBOCJBxSOqKflIPIi3NbT+eZc+fVt3OecYOE4
H2wQ1zTRy1pZAg5kThO6u+Z4pw0HAgMBAAECgYBlmmGH8U1608psKgiOXxG/erSk
J3Ky1Ma5FDYj7ZmKDN7X2w+puKm9+obfCpf73XACeqWd8Q76skvjlq4sVo7BgaT0
2qN6GDroT11sg4CSVSwJxHvzxkmJnATwDro2rwLEshXS9wLBDLEPz1KgUJ14Nk2S
xKd4rp89MvH8ZyiuAQJBAOPHO1ehZaVKbOQlmbnEvWUbDd/QQso9AxgyDRMjd9eJ
RAQ5FOZaq4SjhQPCZllDXZNYd1WCNGSSw0cpV98iWqcCQQDB4VxLQ3z+307r/Pbj
IgNe0Yeii0jP86En4ev80hzedAFW7sp6hl9ur6RA3mCwN59L/jUT/DwdLckx1xxp
1uahAkEA2XdblryG+RpngCLN8+h8Ek2UH30MZ1182NrgVMdmIafyAj4lUBB89PPR
iNdPNCX27zhlJoRbVTIxsn0sYeLAvQJAZoAWo1PSyYyV1P2wKPTag06TPsQUgpxz
Hvq6ILeUu6bo7mTgd1aDLal+VS08QO2nMi37Mc2wmlySed8YDnynAQJBAIq5gs6A
Cr1BwWDI7XRC/MFh/h2y+iEKRPjzmHt/BcPpWwf/bw8FJBZNRkNBUne0T7b5GCwT
I+WKBS0f1hMD5k4=
-----END PRIVATE KEY-----
*/};
  let pem = func.toString().match(/[^]*\/\*([^]*)\*\/\}$/)[1];
  return KJUR.crypto.Cipher.decrypt("6cba5d24aa354a23a44f4b2c8070095f7247c30af38a6879c7795a8e67497c1d4a66af9141afb43eee96bb5c01d8804bbe25fd4b73695ade707606b859c53fa8f9932b2e0b1c1a27544f5e8073fb83cc74c970a3b88d0988cd1f603f1f6b8a541ad631833a77f1c867575de3779960fbd51fa0e4070032965e4a32c2b029aef1", KEYUTIL.getKey(pem));
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
  let location = "/xpvnsulc/?back_location=https%3a%2f%2fokko.ru%2fvelux-okna.php%3futm_referrer%3dhttp%253a%252f%252fokko.ru%252fvelux-okna.php&hcheck=9031d2fea97221cfa075ce29f8eedaf6&request_datetime=2025-10-01+19%3a09%3a09+%2b0000&request_ip=77.110.106.9&request_id=99TIWRXJ3Cg1&srv=1de7469bd5a50d4edbdd708bfdd1ad3f&copts_k=64e9ae0abc0a1888a81dbf1fd8b65b2b199f8a7074722bb984d6de4e0e783b7c1657667cf20c3eba24187a1c4339cc660a39f55558dc423a048a4e8753613de7";
  if (location.includes("?")) {
    location += "&";
  } else {
    location += "?";
  }
  return location + get_cookie_spid() + "&" + get_cookie_spsc();
}
  </script>
  <script type="text/javascript" src="//servicepipe.ru/static/checkjs/JBQZ09Z5-7.js"></script>
</body>
</html>
