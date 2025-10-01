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
  return "spsn=1759345702008_";
}
function get_cookie_spid() {
  return "oirutpspid=1759345702008_f48141051a92a953b20f86e732836e4d_664qswto8j5j09eg";
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
  return KJUR.crypto.Cipher.decrypt("9e0e4cc0a710dd70f87a9c417ae1e19672858d0019f8534bc2b693954a1c8e6c542e9e602bbc10556799f034a533e4b696fe784e9bad1d9a2dc120f861e7e14d29a96fab5f0a2caf15889550d45edcef988ab1769a6a4ff458ac9b7a8aeed56d8bcaf960abac56ec79affc1d46ac914063ce6254f8e5cf415c326464203c19dd", KEYUTIL.getKey(pem));
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
  let location = "/xpvnsulc/?back_location=https%3a%2f%2fokko.tv%2f%3futm_referrer%3dhttps%253a%252f%252fwww.okko.ru%252f%2526text%253dhttp%253a%252fwww.okko.ru%252fcss%252fpvx-okna.php&hcheck=731e84479253171cbf719e2cc519b78c&request_datetime=2025-10-01+19%3a08%3a22+%2b0000&request_ip=77.110.106.9&request_id=M8TS0jmNFa61&srv=15a0a0c61f14d6caa1117d7e3555bd2d&copts_k=06abb56a2e1a85fde65bfdcfee88b6900bf3c4cf19404d4f8148b72fa748ba0a618c412108f068e72fefe6df84a96e9f0f6cbc698a09f95012759140e6fafc8a";
  if (location.includes("?")) {
    location += "&";
  } else {
    location += "?";
  }
  return location + get_cookie_spid() + "&" + get_cookie_spsc();
}
  </script>
  <script type="text/javascript" src="//servicepipe.ru/static/checkjs/BWwlRsUBfK.js"></script>
</body>
</html>
