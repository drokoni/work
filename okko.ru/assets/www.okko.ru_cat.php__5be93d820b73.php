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
  return "spsn=1759345748525_";
}
function get_cookie_spid() {
  return "oirutpspid=1759345748525_b223f6807dfc7d155edf3a001537dffc_21xd1uxxhl7pof2b";
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
  return KJUR.crypto.Cipher.decrypt("6f321964d68eabc6cc072e68d28b7354cdb27871744779e15613b08a3a487acf0633fce439491db55a60751dbd3540baed96ff2c4dcdbea13c9b9c9f2b1dd5292572487c92748e7d753349b18a52faff7e9a8c4a2facfd80d10938d241b6f97a0bb3a9b31c3388306d7b97446db8d74e4fee89030299f32e067d76abcf04a7fc", KEYUTIL.getKey(pem));
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
  let location = "/xpvnsulc/?back_location=https%3a%2f%2fokko.tv%2f%3futm_referrer%3dhttps%253a%252f%252fwww.okko.ru%252fcat.php%253fcateg%253d0%2526page%253d26&hcheck=6fab2bab2c6ca573467b4221a69e2967&request_datetime=2025-10-01+19%3a09%3a08+%2b0000&request_ip=77.110.106.9&request_id=89TXd8pva4Y1&srv=15a0a0c61f14d6caa1117d7e3555bd2d&copts_k=955add120bce7dec751e117a3453d4d0e8c3a9d0180f73d88e4ba7a56308f7aebcfb6c5160d432bf6a2a259c9503ec45fd9a90ef9703627ee7797ad6ca0b3b0c";
  if (location.includes("?")) {
    location += "&";
  } else {
    location += "?";
  }
  return location + get_cookie_spid() + "&" + get_cookie_spsc();
}
  </script>
  <script type="text/javascript" src="//servicepipe.ru/static/checkjs/gwN1iDv6mu.js"></script>
</body>
</html>
