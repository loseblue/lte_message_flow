<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="niviuk.css" rel="stylesheet" type="text/css">
  <title>24.301 NAS</title>
  <meta name="keywords" content="LTE,NAS,Non Access Stratum">
  <meta name="description" content="LTE NAS protocol messages">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>


<body>
<div class="container">
  <header>
    <div id="banner"></div>
  </header>

  <nav class="navbar navbar-default">
    <div class="navbar-inner">
      <ul class="nav nav-pills">
        <li><a href="index.html"><span class="glyphicon glyphicon-signal"></span></a></li>
        <li><a href="rrc_lte.html">RRC (Radio)</a></li>
        <li><a href="s1ap.html">S1</a></li>
        <li><a href="x2ap.html">X2</a></li>
        <li><a href="lpp.html">LPP </a></li>
        <li><a href="lppa.html">LPPa </a></li>
        <li><a href="lte_sls.html">LCS </a></li>
        <li><a href="m2ap.html">M2 (eMBMS)</a></li>
        <li><a href="m3ap.html">M3 (eMBMS)</a></li>
        <li><a href="sbcap.html">SBc (Broadcast)</a></li>
        <li><a href="lte_nas.php">Nas</a></li>
      </ul>
    </div>
  </nav>

  <section>
  <h1>LTE NAS description</h1>
  <h2><a id="NAS"></a>Non Access Stratum protocol for Evolved Packet System (EPS)</h2>
  <h3><a href="http://www.3gpp.org/DynaReport/24301.htm">24.301</a> v12.2.0 (2013-09)</h3>

  <p class="text-primary">Control plane between UE and MME at the radio interface</p>
  <ul>
    <li>Establish and maintain IP connectivity between the UE and a packet data network gateway (PDN GW)</li>
    <li>Default and Dedicated EPS Bearer management</li>
    <li>Mobility of the user equipment (UE)</li>
    <li>Integrity protection and ciphering of NAS signalling messages</li>
  </ul>
  
  <form action="lte_nas.php" method="post">
    <label for="sort_flag">Filter</label>
    <select name="sort_flag" id="sort_flag">
    <optgroup label="Message type">
      <option value="T1">Increasing</option>
      <option value="T9">Decreasing</option>
    </optgroup>
    <optgroup label="Direction">
      <option value="D1">to UE</option>
      <option value="D9">to Network</option>
    </optgroup>
    <optgroup label="Alphabetical">
      <option value="A1">Increasing</option>
      <option value="A9">Decreasing</option>
    </optgroup>
    <optgroup label="Reference">
      <option value="R1">Increasing</option>
      <option value="R9">Decreasing</option>
    </optgroup>
    </select>
    <input type="submit" name="Display" value="Sort" class="btn btn-sm btn-success" />
  </form>
<br>
<table class="table_freq">
 <caption>EPS mobility management messages</caption>
 <thead>
  <tr>
    <th colspan="2">Message type</th>
    <td>Direction</td>
    <td>Message</td>
    <td>Reference</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_bleu1">
    <th>0x42</th>
    <td>66</td>
    <td>to UE</td>
    <td>Attach accept</td>
    <td><a href="#Attach_accept">8.2.1</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x43</th>
    <td>67</td>
    <td>to Network</td>
    <td>Attach complete</td>
    <td><a href="#Attach_complete">8.2.2</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x44</th>
    <td>68</td>
    <td>to UE</td>
    <td>Attach reject</td>
    <td><a href="#Attach_reject">8.2.3</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x41</th>
    <td>65</td>
    <td>to Network</td>
    <td>Attach request</td>
    <td><a href="#Attach_request">8.2.4</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x5c</th>
    <td>92</td>
    <td>to Network</td>
    <td>Authentication failure</td>
    <td><a href="#Authentication_failure">8.2.5</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x54</th>
    <td>84</td>
    <td>to UE</td>
    <td>Authentication reject</td>
    <td><a href="#Authentication_reject">8.2.6</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x52</th>
    <td>82</td>
    <td>to UE</td>
    <td>Authentication request</td>
    <td><a href="#Authentication_request">8.2.7</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x53</th>
    <td>83</td>
    <td>to Network</td>
    <td>Authentication response</td>
    <td><a href="#Authentication_response">8.2.8</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x64</th>
    <td>100</td>
    <td>to UE</td>
    <td>CS Service notification</td>
    <td><a href="#CS_Service_notification">8.2.9</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x46</th>
    <td>70</td>
    <td>to UE</td>
    <td>Detach accept (UE originating detach)</td>
    <td><a href="#Detach_accept_UE_originating_detach">8.2.10.1</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x46</th>
    <td>70</td>
    <td>to Network</td>
    <td>Detach accept (UE terminated detach)</td>
    <td><a href="#Detach_accept_UE_terminated_detach">8.2.10.2</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x45</th>
    <td>69</td>
    <td>to Network</td>
    <td>Detach request (UE originating detach)</td>
    <td><a href="#Detach_request_UE_originating_detach">8.2.11.1</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x45</th>
    <td>69</td>
    <td>to UE</td>
    <td>Detach request (UE terminated detach)</td>
    <td><a href="#Detach_request_UE_terminated_detach">8.2.11.2</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x62</th>
    <td>98</td>
    <td>to UE</td>
    <td>Downlink NAS transport</td>
    <td><a href="#Downlink_NAS_transport">8.2.12</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x61</th>
    <td>97</td>
    <td>to UE</td>
    <td>EMM information</td>
    <td><a href="#EMM_information">8.2.13</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x60</th>
    <td>96</td>
    <td>both</td>
    <td>EMM status</td>
    <td><a href="#EMM_status">8.2.14</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x4c</th>
    <td>76</td>
    <td>to Network</td>
    <td>Extended service request</td>
    <td><a href="#Extended_service_request">8.2.15</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x50</th>
    <td>80</td>
    <td>to UE</td>
    <td>GUTI reallocation command</td>
    <td><a href="#GUTI_reallocation_command">8.2.16</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x51</th>
    <td>81</td>
    <td>to Network</td>
    <td>GUTI reallocation complete</td>
    <td><a href="#GUTI_reallocation_complete">8.2.17</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x55</th>
    <td>85</td>
    <td>to UE</td>
    <td>Identity request</td>
    <td><a href="#Identity_request">8.2.18</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x56</th>
    <td>86</td>
    <td>to Network</td>
    <td>Identity response</td>
    <td><a href="#Identity_response">8.2.19</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x5d</th>
    <td>93</td>
    <td>to UE</td>
    <td>Security mode command</td>
    <td><a href="#Security_mode_command">8.2.20</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x5e</th>
    <td>94</td>
    <td>to Network</td>
    <td>Security mode complete</td>
    <td><a href="#Security_mode_complete">8.2.21</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x5f</th>
    <td>95</td>
    <td>to Network</td>
    <td>Security mode reject</td>
    <td><a href="#Security_mode_reject">8.2.22</a></td>
  </tr>
  <tr class="tr_blanc">
    <th></th>
    <td></td>
    <td>both</td>
    <td>Security protected NAS message</td>
    <td><a href="#Security_protected_NAS_message">8.2.23</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x4d</th>
    <td>77</td>
    <td>to UE</td>
    <td>Service reject</td>
    <td><a href="#Service_reject">8.2.24</a></td>
  </tr>
  <tr class="tr_blanc">
    <th></th>
    <td></td>
    <td>to Network</td>
    <td>Service request</td>
    <td><a href="#Service_request">8.2.25</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x49</th>
    <td>73</td>
    <td>to UE</td>
    <td>Tracking area update accept</td>
    <td><a href="#Tracking_area_update_accept">8.2.26</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x4a</th>
    <td>74</td>
    <td>to Network</td>
    <td>Tracking area update complete</td>
    <td><a href="#Tracking_area_update_complete">8.2.27</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x4b</th>
    <td>75</td>
    <td>to UE</td>
    <td>Tracking area update reject</td>
    <td><a href="#Tracking_area_update_reject">8.2.28</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x48</th>
    <td>72</td>
    <td>to Network</td>
    <td>Tracking area update request</td>
    <td><a href="#Tracking_area_update_request">8.2.29</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x63</th>
    <td>99</td>
    <td>to Network</td>
    <td>Uplink NAS transport</td>
    <td><a href="#Uplink_NAS_transport">8.2.30</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0x68</th>
    <td>104</td>
    <td>to UE</td>
    <td>Downlink generic NAS transport</td>
    <td><a href="#Downlink_generic_NAS_transport">8.2.31</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0x69</th>
    <td>105</td>
    <td>to Network</td>
    <td>Uplink generic NAS transport</td>
    <td><a href="#Uplink_generic_NAS_transport">8.2.32</a></td>
  </tr>
 </tbody>
 <tfoot>
  <tr>
    <td colspan="5">Nb = 34</td>
  </tr>
 </tfoot>
</table>
<br>
<table class="table_freq">
 <caption>EPS session management messages</caption>
 <thead>
  <tr>
    <th colspan="2">Message type</th>
    <td>Direction</td>
    <td>Message</td>
    <td>Reference</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <th>0xc6</th>
    <td>198</td>
    <td>to Network</td>
    <td>Activate dedicated EPS bearer context accept</td>
    <td><a href="#Activate_dedicated_EPS_bearer_context_accept">8.3.1</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xc7</th>
    <td>199</td>
    <td>to Network</td>
    <td>Activate dedicated EPS bearer context reject</td>
    <td><a href="#Activate_dedicated_EPS_bearer_context_reject">8.3.2</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xc5</th>
    <td>197</td>
    <td>to UE</td>
    <td>Activate dedicated EPS bearer context request</td>
    <td><a href="#Activate_dedicated_EPS_bearer_context_request">8.3.3</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xc2</th>
    <td>194</td>
    <td>to Network</td>
    <td>Activate default EPS bearer context accept</td>
    <td><a href="#Activate_default_EPS_bearer_context_accept">8.3.4</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xc3</th>
    <td>195</td>
    <td>to Network</td>
    <td>Activate default EPS bearer context reject</td>
    <td><a href="#Activate_default_EPS_bearer_context_reject">8.3.5</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xc1</th>
    <td>193</td>
    <td>to UE</td>
    <td>Activate default EPS bearer context request</td>
    <td><a href="#Activate_default_EPS_bearer_context_request">8.3.6</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xd5</th>
    <td>213</td>
    <td>to UE</td>
    <td>Bearer resource allocation reject</td>
    <td><a href="#Bearer_resource_allocation_reject">8.3.7</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xd4</th>
    <td>212</td>
    <td>to Network</td>
    <td>Bearer resource allocation request</td>
    <td><a href="#Bearer_resource_allocation_request">8.3.8</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xd7</th>
    <td>215</td>
    <td>to UE</td>
    <td>Bearer resource modification reject</td>
    <td><a href="#Bearer_resource_modification_reject">8.3.9</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xd6</th>
    <td>214</td>
    <td>to Network</td>
    <td>Bearer resource modification request</td>
    <td><a href="#Bearer_resource_modification_request">8.3.10</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xce</th>
    <td>206</td>
    <td>to Network</td>
    <td>Deactivate EPS bearer context accept</td>
    <td><a href="#Deactivate_EPS_bearer_context_accept">8.3.11</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xcd</th>
    <td>205</td>
    <td>to UE</td>
    <td>Deactivate EPS bearer context request</td>
    <td><a href="#Deactivate_EPS_bearer_context_request">8.3.12</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xd9</th>
    <td>217</td>
    <td>to UE</td>
    <td>ESM information request</td>
    <td><a href="#ESM_information_request">8.3.13</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xda</th>
    <td>218</td>
    <td>to Network</td>
    <td>ESM information response</td>
    <td><a href="#ESM_information_response">8.3.14</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xe8</th>
    <td>232</td>
    <td>both</td>
    <td>ESM status</td>
    <td><a href="#ESM_status">8.3.15</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xca</th>
    <td>202</td>
    <td>to Network</td>
    <td>Modify EPS bearer context accept</td>
    <td><a href="#Modify_EPS_bearer_context_accept">8.3.16</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xcb</th>
    <td>203</td>
    <td>to Network</td>
    <td>Modify EPS bearer context reject</td>
    <td><a href="#Modify_EPS_bearer_context_reject">8.3.17</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xc9</th>
    <td>201</td>
    <td>to UE</td>
    <td>Modify EPS bearer context request</td>
    <td><a href="#Modify_EPS_bearer_context_request">8.3.18</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xdb</th>
    <td>219</td>
    <td>to UE</td>
    <td>Notification</td>
    <td><a href="#Notification">8.3.18A</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xd1</th>
    <td>209</td>
    <td>to UE</td>
    <td>PDN connectivity reject</td>
    <td><a href="#PDN_connectivity_reject">8.3.19</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xd0</th>
    <td>208</td>
    <td>to Network</td>
    <td>PDN connectivity request</td>
    <td><a href="#PDN_connectivity_request">8.3.20</a></td>
  </tr>
  <tr class="tr_bleu1">
    <th>0xd3</th>
    <td>211</td>
    <td>to UE</td>
    <td>PDN disconnect reject</td>
    <td><a href="#PDN_disconnect_reject">8.3.21</a></td>
  </tr>
  <tr class="tr_blanc">
    <th>0xd2</th>
    <td>210</td>
    <td>to Network</td>
    <td>PDN disconnect request</td>
    <td><a href="#PDN_disconnect_request">8.3.22</a></td>
  </tr>
 </tbody>
 <tfoot>
  <tr>
    <td colspan="5">Nb = 23</td>
  </tr>
 </tfoot>
</table>
<br>

<p>Presence (24.007)</p>
  <dl class="dl-horizontal">
  <dt>M</dt>
  <dd>Mandatory</dd>
  <dt>O</dt>
  <dd>Optional</dd>
  <dt>C</dt>
  <dd>Conditional</dd>
  </dl>

<p>Total length X,Y-Z</p>
  <dl class="dl-horizontal">
  <dt>X</dt>
  <dd>Minimum length with mandatory IEI only</dd>
  <dt>Y</dt>
  <dd>Minimum length with all IEIs</dd>
  <dt>Z</dt>
  <dd>Maximum length with all IEIs</dd>
  </dl>
</p>

<h3>EPS mobility management message</h3>
<a id="Attach_accept"></a>
<h4>8.2.1 Attach accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Attach accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS attach result</td>
    <td>EPS attach result<br>9.9.3.10</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>T3412 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>TAI list</td>
    <td>Tracking area identity list<br>9.9.3.33</td>
    <td>M</td>
    <td>LV</td>
    <td>7-97</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM message container</td>
    <td>ESM message container<br>9.9.3.15</td>
    <td>M</td>
    <td>LV-E</td>
    <td>5-n</td>
  </tr>
  <tr class="tr_blanc">
    <td>50</td>
    <td>GUTI</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>13</td>
  </tr>
  <tr class="tr_bleu1">
    <td>13</td>
    <td>Location area identification</td>
    <td>Location area identification<br>9.9.2.2</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_blanc">
    <td>23</td>
    <td>MS identity</td>
    <td>Mobile identity<br>9.9.2.3</td>
    <td>O</td>
    <td>TLV</td>
    <td>7-10</td>
  </tr>
  <tr class="tr_bleu1">
    <td>53</td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>17</td>
    <td>T3402 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>59</td>
    <td>T3423 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>4A</td>
    <td>Equivalent PLMNs</td>
    <td>PLMN list<br>9.9.2.8</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-47</td>
  </tr>
  <tr class="tr_bleu1">
    <td>34</td>
    <td>Emergency number list</td>
    <td>Emergency number list<br>9.9.3.37</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-50</td>
  </tr>
  <tr class="tr_blanc">
    <td>64</td>
    <td>EPS network feature support</td>
    <td>EPS network feature support<br>9.9.3.12A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_bleu1">
    <td>F-</td>
    <td>Additional update result</td>
    <td>Additional update result<br>9.9.3.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>5E</td>
    <td>T3412 extended value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 19</td><td colspan="2"> M = 8, O = 11</td><td>16,65-n</td></tr>
 </tbody>
</table>
<br>
<a id="Attach_complete"></a>
<h4>8.2.2 Attach complete</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Attach complete message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM message container</td>
    <td>ESM message container<br>9.9.3.15</td>
    <td>M</td>
    <td>LV-E</td>
    <td>5-n</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>7-n</td></tr>
 </tbody>
</table>
<br>
<a id="Attach_reject"></a>
<h4>8.2.3 Attach reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Attach reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>78</td>
    <td>ESM message container</td>
    <td>ESM message container<br>9.9.3.15</td>
    <td>O</td>
    <td>TLV-E</td>
    <td>6-n</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5F</td>
    <td>T3346 value</td>
    <td>GPRS timer 2<br>9.9.3.16A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>16</td>
    <td>T3402 value</td>
    <td>GPRS timer 2<br>9.9.3.16A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 4, O = 3</td><td>3,15-n</td></tr>
 </tbody>
</table>
<br>
<a id="Attach_request"></a>
<h4>8.2.4 Attach request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Attach request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS attach type</td>
    <td>EPS attach type<br>9.9.3.11</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS mobile identity</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>M</td>
    <td>LV</td>
    <td>5-12</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>UE network capability</td>
    <td>UE network capability<br>9.9.3.34</td>
    <td>M</td>
    <td>LV</td>
    <td>3-14</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM message container</td>
    <td>ESM message container<br>9.9.3.15</td>
    <td>M</td>
    <td>LV-E</td>
    <td>5-n</td>
  </tr>
  <tr class="tr_blanc">
    <td>19</td>
    <td>Old P-TMSI signature</td>
    <td>P-TMSI signature<br>9.9.3.26</td>
    <td>O</td>
    <td>TV</td>
    <td>4</td>
  </tr>
  <tr class="tr_bleu1">
    <td>50</td>
    <td>Additional GUTI</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>13</td>
  </tr>
  <tr class="tr_blanc">
    <td>52</td>
    <td>Last visited registered TAI</td>
    <td>Tracking area identity<br>9.9.3.32</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5C</td>
    <td>DRX parameter</td>
    <td>DRX parameter<br>9.9.3.8</td>
    <td>O</td>
    <td>TV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>31</td>
    <td>MS network capability</td>
    <td>MS network capability<br>9.9.3.20</td>
    <td>O</td>
    <td>TLV</td>
    <td>4-10</td>
  </tr>
  <tr class="tr_bleu1">
    <td>13</td>
    <td>Old location area identification</td>
    <td>Location area identification<br>9.9.2.2</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_blanc">
    <td>9-</td>
    <td>TMSI status</td>
    <td>TMSI status<br>9.9.3.31</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>11</td>
    <td>Mobile station classmark 2</td>
    <td>Mobile station classmark 2<br>9.9.2.4</td>
    <td>O</td>
    <td>TLV</td>
    <td>5</td>
  </tr>
  <tr class="tr_blanc">
    <td>20</td>
    <td>Mobile station classmark 3</td>
    <td>Mobile station classmark 3<br>9.9.2.5</td>
    <td>O</td>
    <td>TLV</td>
    <td>2-34</td>
  </tr>
  <tr class="tr_bleu1">
    <td>40</td>
    <td>Supported Codecs</td>
    <td>Supported Codec List<br>9.9.2.10</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-n</td>
  </tr>
  <tr class="tr_blanc">
    <td>F-</td>
    <td>Additional update type</td>
    <td>Additional update type<br>9.9.3.0B</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5D</td>
    <td>Voice domain preference and UE's usage setting</td>
    <td>Voice domain preference and UE's usage setting<br>9.9.3.44</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>D-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>E-</td>
    <td>Old GUTI type</td>
    <td>GUTI type<br>9.9.3.45</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>C- </td>
    <td>MS network feature support</td>
    <td>MS network feature support<br>9.9.3.20A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>10</td>
    <td>TMSI based NRI container</td>
    <td>Network resource identifier container<br>9.9.3.24A</td>
    <td>O</td>
    <td>TLV</td>
    <td>4</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 24</td><td colspan="2"> M = 8, O = 16</td><td>16,76-n</td></tr>
 </tbody>
</table>
<br>
<a id="Authentication_failure"></a>
<h4>8.2.5 Authentication failure</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Authentication failure message type</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>30</td>
    <td>Authentication failure parameter</td>
    <td>Authentication failure parameter<br>9.9.3.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>16</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,19-19</td></tr>
 </tbody>
</table>
<br>
<a id="Authentication_reject"></a>
<h4>8.2.6 Authentication reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Authentication reject message type</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 3</td><td colspan="2"> M = 3</td><td>2</td></tr>
 </tbody>
</table>
<br>
<a id="Authentication_request"></a>
<h4>8.2.7 Authentication request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Authentication request message type</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>NAS key set identifier ASME </td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Authentication parameter RAND (EPS challenge)</td>
    <td>Authentication parameter RAND<br>9.9.3.3</td>
    <td>M</td>
    <td>V</td>
    <td>16</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Authentication parameter AUTN (EPS challenge)</td>
    <td>Authentication parameter AUTN<br>9.9.3.2</td>
    <td>M</td>
    <td>LV</td>
    <td>17</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 7</td><td>36</td></tr>
 </tbody>
</table>
<br>
<a id="Authentication_response"></a>
<h4>8.2.8 Authentication response</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Authentication response message type</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Authentication response parameter</td>
    <td>Authentication response parameter<br>9.9.3.4</td>
    <td>M</td>
    <td>LV</td>
    <td>5-17</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>7-19</td></tr>
 </tbody>
</table>
<br>
<a id="CS_service_notification"></a>
<h4>8.2.9 CS service notification</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>CS service notification message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Paging identity</td>
    <td>Paging identity<br>9.9.3.25A</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>60</td>
    <td>CLI</td>
    <td>CLI<br>9.9.3.38</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-14</td>
  </tr>
  <tr class="tr_bleu1">
    <td>61</td>
    <td>SS Code</td>
    <td>SS Code<br>9.9.3.39</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>62</td>
    <td>LCS indicator</td>
    <td>LCS indicator<br>9.9.3.40</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>63</td>
    <td>LCS client identity</td>
    <td>LCS client identity<br>9.9.3.41</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-257</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 8</td><td colspan="2"> M = 4, O = 4</td><td>3,13-278</td></tr>
 </tbody>
</table>
<br>
<a id="Detach_accept_UE_originating_detach"></a>
<h4>8.2.10.1  Detach accept (UE originating detach)</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Detach accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 3</td><td colspan="2"> M = 3</td><td>2</td></tr>
 </tbody>
</table>
<br>
<a id="Detach_accept_UE_terminated_detach"></a>
<h4>8.2.10.2  Detach accept (UE terminated detach)</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Detach accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 3</td><td colspan="2"> M = 3</td><td>2</td></tr>
 </tbody>
</table>
<br>
<a id="Detach_request_UE_originating_detach"></a>
<h4>8.2.11.1  Detach request (UE originating detach)</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Detach request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Detach type</td>
    <td>Detach type<br>9.9.3.7</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS mobile identity</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>M</td>
    <td>LV</td>
    <td>5-12</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 6</td><td>8-15</td></tr>
 </tbody>
</table>
<br>
<a id="Detach_request_UE_terminated_detach"></a>
<h4>8.2.11.2  Detach request (UE terminated detach)</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Detach request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Detach type</td>
    <td>Detach type<br>9.9.3.7</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>53</td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>3,5-5</td></tr>
 </tbody>
</table>
<br>
<a id="Downlink_NAS_Transport"></a>
<h4>8.2.12  Downlink NAS Transport</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Downlink NAS transport message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>NAS message container</td>
    <td>NAS message container<br>9.9.3.22</td>
    <td>M</td>
    <td>LV</td>
    <td>3-252</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>5-254</td></tr>
 </tbody>
</table>
<br>
<a id="EMM_information"></a>
<h4>8.2.13  EMM information</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>EMM information message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>43</td>
    <td>Full name for network</td>
    <td>Network name<br>9.9.3.24</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-n</td>
  </tr>
  <tr class="tr_blanc">
    <td>45</td>
    <td>Short name for network</td>
    <td>Network name<br>9.9.3.24</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-n</td>
  </tr>
  <tr class="tr_bleu1">
    <td>46</td>
    <td>Local time zone</td>
    <td>Time zone<br>9.9.3.29</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>47</td>
    <td>Universal time and local time zone</td>
    <td>Time zone and time<br>9.9.3.30</td>
    <td>O</td>
    <td>TV</td>
    <td>8</td>
  </tr>
  <tr class="tr_bleu1">
    <td>49</td>
    <td>Network daylight saving time</td>
    <td>Daylight saving time<br>9.9.3.6</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 8</td><td colspan="2"> M = 3, O = 5</td><td>2,21-n</td></tr>
 </tbody>
</table>
<br>
<a id="EMM_status"></a>
<h4>8.2.14  EMM status</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>EMM status message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>3</td></tr>
 </tbody>
</table>
<br>
<a id="Extended_service_request"></a>
<h4>8.2.15  Extended service request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Extended service request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Service type</td>
    <td>Service type<br>9.9.3.27</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>M-TMSI</td>
    <td>Mobile identity<br>9.9.2.3</td>
    <td>M</td>
    <td>LV</td>
    <td>6</td>
  </tr>
  <tr class="tr_blanc">
    <td>B-</td>
    <td>CSFB response</td>
    <td>CSFB response<br>9.9.3.5</td>
    <td>C</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>57</td>
    <td>EPS bearer context status</td>
    <td>EPS bearer context status<br>9.9.2.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>4</td>
  </tr>
  <tr class="tr_blanc">
    <td>D-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 9</td><td colspan="2"> M = 6, C = 1, O = 2</td><td>9,15-15</td></tr>
 </tbody>
</table>
<br>
<a id="GUTI_reallocation_command"></a>
<h4>8.2.16  GUTI reallocation command</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>GUTI reallocation command message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>GUTI</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>M</td>
    <td>LV</td>
    <td>12</td>
  </tr>
  <tr class="tr_blanc">
    <td>54</td>
    <td>TAI list</td>
    <td>Tracking area identity list<br>9.9.3.33</td>
    <td>O</td>
    <td>TLV</td>
    <td>8-98</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>14,22-112</td></tr>
 </tbody>
</table>
<br>
<a id="GUTI_reallocation_complete"></a>
<h4>8.2.17  GUTI reallocation complete</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>GUTI reallocation complete message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 3</td><td colspan="2"> M = 3</td><td>2</td></tr>
 </tbody>
</table>
<br>
<a id="Identity_request"></a>
<h4>8.2.18  Identity request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Identity request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Identity type</td>
    <td>Identity type 2<br>9.9.3.17</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 5</td><td>3</td></tr>
 </tbody>
</table>
<br>
<a id="Identity_response"></a>
<h4>8.2.19  Identity response</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Identity response message</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Mobile identity</td>
    <td>Mobile identity<br>9.9.2.3</td>
    <td>M</td>
    <td>LV</td>
    <td>4-10</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>6-12</td></tr>
 </tbody>
</table>
<br>
<a id="Security_mode_command"></a>
<h4>8.2.20  Security mode command</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Security mode command message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Selected NAS security algorithms</td>
    <td>NAS security algorithms<br>9.9.3.23</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Replayed UE security capabilities</td>
    <td>UE security capability<br>9.9.3.36</td>
    <td>M</td>
    <td>LV</td>
    <td>3-6</td>
  </tr>
  <tr class="tr_bleu1">
    <td>C-</td>
    <td>IMEISV request</td>
    <td>IMEISV request<br>9.9.3.18</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>55</td>
    <td>Replayed nonce UE</td>
    <td>Nonce<br>9.9.3.25</td>
    <td>O</td>
    <td>TV</td>
    <td>5</td>
  </tr>
  <tr class="tr_bleu1">
    <td>56</td>
    <td>Nonce MME</td>
    <td>Nonce<br>9.9.3.25</td>
    <td>O</td>
    <td>TV</td>
    <td>5</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 10</td><td colspan="2"> M = 7, O = 3</td><td>7,18-21</td></tr>
 </tbody>
</table>
<br>
<a id="Security_mode_complete"></a>
<h4>8.2.21  Security mode complete</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Security mode complete message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>23</td>
    <td>IMEISV</td>
    <td>Mobile identity<br>9.9.2.3</td>
    <td>O</td>
    <td>TLV</td>
    <td>11</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 3, O = 1</td><td>2,13-13</td></tr>
 </tbody>
</table>
<br>
<a id="Security_mode_reject"></a>
<h4>8.2.22  Security mode reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Security mode reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>3</td></tr>
 </tbody>
</table>
<br>
<a id="Security_protected_NAS_message"></a>
<h4>8.2.23  Security protected NAS message</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Message authentication code</td>
    <td>Message authentication code<br>9.5</td>
    <td>M</td>
    <td>V</td>
    <td>4</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Sequence number</td>
    <td>Sequence number<br>9.6</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS message</td>
    <td>NAS message<br>9.7</td>
    <td>M</td>
    <td>V</td>
    <td>1-n</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 5</td><td>7-n</td></tr>
 </tbody>
</table>
<br>
<a id="Service_reject"></a>
<h4>8.2.24  Service reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Service reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>5B</td>
    <td>T3442 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>C</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5F</td>
    <td>T3346 value</td>
    <td>GPRS timer 2<br>9.9.3.16A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 4, C = 1, O = 1</td><td>3,8-8</td></tr>
 </tbody>
</table>
<br>
<a id="Service_request"></a>
<h4>8.2.25  Service request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>KSI and sequence number</td>
    <td>KSI and sequence number<br>9.9.3.19</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Message authentication code (short)</td>
    <td>Short MAC<br>9.9.3.28</td>
    <td>M</td>
    <td>V</td>
    <td>2</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>4</td></tr>
 </tbody>
</table>
<br>
<a id="Tracking_area_update_accept"></a>
<h4>8.2.26  Tracking area update accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Tracking area update accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS update result</td>
    <td>EPS update result<br>9.9.3.13</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5A</td>
    <td>T3412 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>50</td>
    <td>GUTI</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>13</td>
  </tr>
  <tr class="tr_bleu1">
    <td>54</td>
    <td>TAI list</td>
    <td>Tracking area identity list<br>9.9.3.33</td>
    <td>O</td>
    <td>TLV</td>
    <td>8-98</td>
  </tr>
  <tr class="tr_blanc">
    <td>57</td>
    <td>EPS bearer context status</td>
    <td>EPS bearer context status<br>9.9.2.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>4</td>
  </tr>
  <tr class="tr_bleu1">
    <td>13</td>
    <td>Location area identification</td>
    <td>Location area identification<br>9.9.2.2</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_blanc">
    <td>23</td>
    <td>MS identity</td>
    <td>Mobile identity<br>9.9.2.3</td>
    <td>O</td>
    <td>TLV</td>
    <td>7-10</td>
  </tr>
  <tr class="tr_bleu1">
    <td>53</td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>17</td>
    <td>T3402 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>59</td>
    <td>T3423 value</td>
    <td>GPRS timer<br>9.9.3.16</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>4A</td>
    <td>Equivalent PLMNs</td>
    <td>PLMN list<br>9.9.2.8</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-47</td>
  </tr>
  <tr class="tr_bleu1">
    <td>34</td>
    <td>Emergency number list</td>
    <td>Emergency number list<br>9.9.3.37</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-50</td>
  </tr>
  <tr class="tr_blanc">
    <td>64</td>
    <td>EPS network feature support</td>
    <td>EPS network feature support<br>9.9.3.12A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_bleu1">
    <td>F-</td>
    <td>Additional update result</td>
    <td>Additional update result<br>9.9.3.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>5E</td>
    <td>T3412 extended value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 19</td><td colspan="2"> M = 5, O = 14</td><td>3,66-246</td></tr>
 </tbody>
</table>
<br>
<a id="Tracking_area_update_complete"></a>
<h4>8.2.27  Tracking area update complete</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Tracking area update complete message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 3</td><td colspan="2"> M = 3</td><td>2</td></tr>
 </tbody>
</table>
<br>
<a id="Tracking_area_update_reject"></a>
<h4>8.2.28  Tracking area update reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EMM cause</td>
    <td>EMM cause<br>9.9.3.9</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>5F</td>
    <td>T3346 value</td>
    <td>GPRS timer 2<br>9.9.3.16A</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,6-6</td></tr>
 </tbody>
</table>
<br>
<a id="Tracking_area_update_request"></a>
<h4>8.2.29  Tracking area update request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Tracking area update request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS update type</td>
    <td>EPS update type<br>9.9.3.14</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Old GUTI </td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>M</td>
    <td>LV</td>
    <td>12</td>
  </tr>
  <tr class="tr_blanc">
    <td>B-</td>
    <td>Non-current native NAS key set identifier</td>
    <td>NAS key set identifier<br>9.9.3.21</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>8-</td>
    <td>GPRS ciphering key sequence number</td>
    <td>Ciphering key sequence number<br>9.9.3.4a</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>19</td>
    <td>Old P-TMSI signature</td>
    <td>P-TMSI signature<br>9.9.3.26</td>
    <td>O</td>
    <td>TV</td>
    <td>4</td>
  </tr>
  <tr class="tr_bleu1">
    <td>50</td>
    <td>Additional GUTI</td>
    <td>EPS mobile identity<br>9.9.3.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>13</td>
  </tr>
  <tr class="tr_blanc">
    <td>55</td>
    <td>NonceUE</td>
    <td>Nonce<br>9.9.3.25</td>
    <td>O</td>
    <td>TV</td>
    <td>5</td>
  </tr>
  <tr class="tr_bleu1">
    <td>58</td>
    <td>UE network capability</td>
    <td>UE network capability<br>9.9.3.34</td>
    <td>O</td>
    <td>TLV</td>
    <td>4-15</td>
  </tr>
  <tr class="tr_blanc">
    <td>52</td>
    <td>Last visited registered TAI</td>
    <td>Tracking area identity<br>9.9.3.32</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5C</td>
    <td>DRX parameter</td>
    <td>DRX parameter<br>9.9.3.8</td>
    <td>O</td>
    <td>TV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>A-</td>
    <td>UE radio capability information update needed</td>
    <td>UE radio capability information update needed<br>9.9.3.35</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>57</td>
    <td>EPS bearer context status</td>
    <td>EPS bearer context status<br>9.9.2.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>4</td>
  </tr>
  <tr class="tr_blanc">
    <td>31</td>
    <td>MS network capability</td>
    <td>MS network capability<br>9.9.3.20</td>
    <td>O</td>
    <td>TLV</td>
    <td>4-10</td>
  </tr>
  <tr class="tr_bleu1">
    <td>13</td>
    <td>Old location area identification</td>
    <td>Location area identification<br>9.9.2.2</td>
    <td>O</td>
    <td>TV</td>
    <td>6</td>
  </tr>
  <tr class="tr_blanc">
    <td>9-</td>
    <td>TMSI status</td>
    <td>TMSI status<br>9.9.3.31</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>11</td>
    <td>Mobile station classmark 2</td>
    <td>Mobile station classmark 2<br>9.9.2.4</td>
    <td>O</td>
    <td>TLV</td>
    <td>5</td>
  </tr>
  <tr class="tr_blanc">
    <td>20</td>
    <td>Mobile station classmark 3</td>
    <td>Mobile station classmark 3<br>9.9.2.5</td>
    <td>O</td>
    <td>TLV</td>
    <td>2-34</td>
  </tr>
  <tr class="tr_bleu1">
    <td>40</td>
    <td>Supported Codecs</td>
    <td>Supported Codec List<br>9.9.2.10</td>
    <td>O</td>
    <td>TLV</td>
    <td>5-n</td>
  </tr>
  <tr class="tr_blanc">
    <td>F-</td>
    <td>Additional update type</td>
    <td>Additional update type<br>9.9.3.0B</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5D</td>
    <td>Voice domain preference and UE's usage setting</td>
    <td>Voice domain preference and UE's usage setting<br>9.9.3.44</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>E-</td>
    <td>Old GUTI type</td>
    <td>GUTI type<br>9.9.3.45</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>D-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>C-</td>
    <td>MS network feature support </td>
    <td>MS network feature support<br>9.9.3.20A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>10</td>
    <td>TMSI based NRI container</td>
    <td>Network resource identifier container<br>9.9.3.24A</td>
    <td>O</td>
    <td>TLV</td>
    <td>4</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 28</td><td colspan="2"> M = 6, O = 22</td><td>15,91-n</td></tr>
 </tbody>
</table>
<br>
<a id="Uplink_NAS_Transport"></a>
<h4>8.2.30  Uplink NAS Transport</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Uplink NAS transport message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>NAS message container</td>
    <td>NAS message container<br>9.9.3.22</td>
    <td>M</td>
    <td>LV</td>
    <td>3-252</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>5-254</td></tr>
 </tbody>
</table>
<br>
<a id="Downlink_generic_NAS_transport"></a>
<h4>8.2.31  Downlink generic NAS transport</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Downlink generic NAS transport message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Generic message container type</td>
    <td>Generic message container type<br>9.9.3.42</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Generic message container</td>
    <td>Generic message container<br>9.9.3.43</td>
    <td>M</td>
    <td>LV-E</td>
    <td>3-n</td>
  </tr>
  <tr class="tr_bleu1">
    <td>65</td>
    <td>Additional information</td>
    <td>Additional information<br>9.9.2.0</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-n</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>6,9-n</td></tr>
 </tbody>
</table>
<br>
<a id="Uplink_generic_NAS_transport"></a>
<h4>8.2.32  Uplink generic NAS transport</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Security header type</td>
    <td>Security header type<br>9.3.1</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Uplink generic NAS transport message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Generic message container type</td>
    <td>Generic message container type<br>9.9.3.42</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Generic message container</td>
    <td>Generic message container<br>9.9.3.43</td>
    <td>M</td>
    <td>LV-E</td>
    <td>3-n</td>
  </tr>
  <tr class="tr_bleu1">
    <td>65</td>
    <td>Additional information</td>
    <td>Additional information<br>9.9.2.0</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-n</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>6,9-n</td></tr>
 </tbody>
</table>
<br>
<h3>EPS session management message</h3>
<a id="Activate_dedicated_EPS_bearer_context_accept"></a>
<h4>8.3.1 Activate dedicated EPS bearer context accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate dedicated EPS bearer context accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,6-256</td></tr>
 </tbody>
</table>
<br>
<a id="Activate_dedicated_EPS_bearer_context_reject"></a>
<h4>8.3.2 Activate dedicated EPS bearer context reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate dedicated EPS bearer context reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>4,7-257</td></tr>
 </tbody>
</table>
<br>
<a id="Activate_dedicated_EPS_bearer_context_request"></a>
<h4>8.3.3 Activate dedicated EPS bearer context request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate dedicated EPS bearer context request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Linked EPS bearer identity</td>
    <td>Linked EPS bearer identity<br>9.9.4.6</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>EPS QoS</td>
    <td>EPS quality of service<br>9.9.4.3</td>
    <td>M</td>
    <td>LV</td>
    <td>2-14</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>TFT</td>
    <td>Traffic flow template<br>9.9.4.16</td>
    <td>M</td>
    <td>LV</td>
    <td>2-256</td>
  </tr>
  <tr class="tr_blanc">
    <td>5D</td>
    <td>Transaction identifier</td>
    <td>Transaction identifier<br>9.9.4.17</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-4</td>
  </tr>
  <tr class="tr_bleu1">
    <td>30</td>
    <td>Negotiated QoS</td>
    <td>Quality of service<br>9.9.4.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>14-22</td>
  </tr>
  <tr class="tr_blanc">
    <td>32</td>
    <td>Negotiated LLC SAPI</td>
    <td>LLC service access point identifier<br>9.9.4.7</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>8-</td>
    <td>Radio priority</td>
    <td>Radio priority<br>9.9.4.13</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>34</td>
    <td>Packet flow Identifier</td>
    <td>Packet flow Identifier<br>9.9.4.8</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 14</td><td colspan="2"> M = 8, O = 6</td><td>8,34-559</td></tr>
 </tbody>
</table>
<br>
<a id="Activate_default_EPS_bearer_context_accept"></a>
<h4>8.3.4 Activate default EPS bearer context accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate default EPS bearer context accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,6-256</td></tr>
 </tbody>
</table>
<br>
<a id="Activate_default_EPS_bearer_context_reject"></a>
<h4>8.3.5 Activate default EPS bearer context reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate default EPS bearer context reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>4,7-257</td></tr>
 </tbody>
</table>
<br>
<a id="Activate_default_EPS_bearer_context_request"></a>
<h4>8.3.6 Activate default EPS bearer context request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Activate default EPS bearer context request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>EPS QoS</td>
    <td>EPS quality of service<br>9.9.4.3</td>
    <td>M</td>
    <td>LV</td>
    <td>2-14</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Access point name</td>
    <td>Access point name<br>9.9.4.1</td>
    <td>M</td>
    <td>LV</td>
    <td>2-101</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>PDN address</td>
    <td>PDN address<br>9.9.4.9</td>
    <td>M</td>
    <td>LV</td>
    <td>6-14</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5D</td>
    <td>Transaction identifier</td>
    <td>Transaction identifier<br>9.9.4.17</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-4</td>
  </tr>
  <tr class="tr_blanc">
    <td>30</td>
    <td>Negotiated QoS</td>
    <td>Quality of service<br>9.9.4.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>14-22</td>
  </tr>
  <tr class="tr_bleu1">
    <td>32</td>
    <td>Negotiated LLC SAPI</td>
    <td>LLC service access point identifier<br>9.9.4.7</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>8-</td>
    <td>Radio priority</td>
    <td>Radio priority<br>9.9.4.13</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>34</td>
    <td>Packet flow Identifier</td>
    <td>Packet flow Identifier<br>9.9.4.8</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>5E</td>
    <td>APN-AMBR</td>
    <td>APN aggregate maximum bit rate<br>9.9.4.2</td>
    <td>O</td>
    <td>TLV</td>
    <td>4-8</td>
  </tr>
  <tr class="tr_bleu1">
    <td>58</td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_bleu1">
    <td>B-</td>
    <td>Connectivity type</td>
    <td>Connectivity type<br>9.9.4.2A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 16</td><td colspan="2"> M = 7, O = 9</td><td>13,46-428</td></tr>
 </tbody>
</table>
<br>
<a id="Bearer_resource_allocation_reject"></a>
<h4>8.3.7 Bearer resource allocation reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Bearer resource allocation reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_blanc">
    <td>37</td>
    <td>T3396 value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 5, O = 2</td><td>4,10-260</td></tr>
 </tbody>
</table>
<br>
<a id="Bearer_resource_allocation_request"></a>
<h4>8.3.8 Bearer resource allocation request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Bearer resource allocation request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Linked EPS bearer identity</td>
    <td>Linked EPS bearer identity<br>9.9.4.6</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Traffic flow aggregate</td>
    <td>Traffic flow aggregate description<br>9.9.4.15</td>
    <td>M</td>
    <td>LV</td>
    <td>2-256</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Required traffic flow QoS</td>
    <td>EPS quality of service<br>9.9.4.3</td>
    <td>M</td>
    <td>LV</td>
    <td>2-14</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_bleu1">
    <td>C-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 10</td><td colspan="2"> M = 8, O = 2</td><td>8,12-528</td></tr>
 </tbody>
</table>
<br>
<a id="Bearer_resource_modification_reject"></a>
<h4>8.3.9 Bearer resource modification reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Bearer resource modification reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_blanc">
    <td>37</td>
    <td>T3396 value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 5, O = 2</td><td>4,10-260</td></tr>
 </tbody>
</table>
<br>
<a id="Bearer_resource_modification_request"></a>
<h4>8.3.10  Bearer resource modification request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Bearer resource modification request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>EPS bearer identity for packet filter</td>
    <td>Linked EPS bearer identity<br>9.9.4.6</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Traffic flow aggregate</td>
    <td>Traffic flow aggregate description<br>9.9.4.15</td>
    <td>M</td>
    <td>LV</td>
    <td>2-256</td>
  </tr>
  <tr class="tr_bleu1">
    <td>5B</td>
    <td>Required traffic flow QoS</td>
    <td>EPS quality of service<br>9.9.4.3</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-15</td>
  </tr>
  <tr class="tr_blanc">
    <td>58</td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_blanc">
    <td>C-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 11</td><td colspan="2"> M = 7, O = 4</td><td>6,15-531</td></tr>
 </tbody>
</table>
<br>
<a id="Deactivate_EPS_bearer_context_accept"></a>
<h4>8.3.11  Deactivate EPS bearer context accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Deactivate EPS bearer context accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,6-256</td></tr>
 </tbody>
</table>
<br>
<a id="Deactivate_EPS_bearer_context_request"></a>
<h4>8.3.12  Deactivate EPS bearer context request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Deactivate EPS bearer context request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_blanc">
    <td>37</td>
    <td>T3396 value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 5, O = 2</td><td>4,10-260</td></tr>
 </tbody>
</table>
<br>
<a id="ESM_information_request"></a>
<h4>8.3.13  ESM information request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM information request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 4</td><td colspan="2"> M = 4</td><td>3</td></tr>
 </tbody>
</table>
<br>
<a id="ESM_information_response"></a>
<h4>8.3.14  ESM information response</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM information response message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>28</td>
    <td>Access point name</td>
    <td>Access point name<br>9.9.4.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-102</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 4, O = 2</td><td>3,9-358</td></tr>
 </tbody>
</table>
<br>
<a id="ESM_status"></a>
<h4>8.3.15  ESM status</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>ESM status message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 5</td><td>4</td></tr>
 </tbody>
</table>
<br>
<a id="Modify_EPS_bearer_context_accept"></a>
<h4>8.3.16  Modify EPS bearer context accept</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Modify EPS bearer context accept message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 4, O = 1</td><td>3,6-256</td></tr>
 </tbody>
</table>
<br>
<a id="Modify_EPS_bearer_context_reject"></a>
<h4>8.3.17  Modify EPS bearer context reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Modify EPS bearer context reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>4,7-257</td></tr>
 </tbody>
</table>
<br>
<a id="Modify_EPS_bearer_context_request"></a>
<h4>8.3.18  Modify EPS bearer context request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Modify EPS bearer context request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td>5B</td>
    <td>New EPS QoS</td>
    <td>EPS quality of service<br>9.9.4.3</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-15</td>
  </tr>
  <tr class="tr_bleu1">
    <td>36</td>
    <td>TFT</td>
    <td>Traffic flow template<br>9.9.4.16</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-257</td>
  </tr>
  <tr class="tr_blanc">
    <td>30</td>
    <td>New QoS</td>
    <td>Quality of service<br>9.9.4.12</td>
    <td>O</td>
    <td>TLV</td>
    <td>14-22</td>
  </tr>
  <tr class="tr_bleu1">
    <td>32</td>
    <td>Negotiated LLC SAPI</td>
    <td>LLC service access point identifier<br>9.9.4.7</td>
    <td>O</td>
    <td>TV</td>
    <td>2</td>
  </tr>
  <tr class="tr_blanc">
    <td>8-</td>
    <td>Radio priority</td>
    <td>Radio priority<br>9.9.4.13</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>34</td>
    <td>Packet flow Identifier</td>
    <td>Packet flow Identifier<br>9.9.4.8</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr class="tr_blanc">
    <td>5E</td>
    <td>APN-AMBR</td>
    <td>APN aggregate maximum bit rate<br>9.9.4.2</td>
    <td>O</td>
    <td>TLV</td>
    <td>4-8</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 12</td><td colspan="2"> M = 4, O = 8</td><td>3,36-564</td></tr>
 </tbody>
</table>
<br>
<a id="Notification"></a>
<h4>8.3.18A Notification</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Notification message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Notification indicator</td>
    <td>Notification indicator<br>9.9.4.7A</td>
    <td>M</td>
    <td>LV</td>
    <td>2</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 5</td><td colspan="2"> M = 5</td><td>5</td></tr>
 </tbody>
</table>
<br>
<a id="PDN_connectivity_reject"></a>
<h4>8.3.19  PDN connectivity reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>PDN connectivity reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_blanc">
    <td>37</td>
    <td>T3396 value</td>
    <td>GPRS timer 3<br>9.9.3.16B</td>
    <td>O</td>
    <td>TLV</td>
    <td>3</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 5, O = 2</td><td>4,10-260</td></tr>
 </tbody>
</table>
<br>
<a id="PDN_connectivity_request"></a>
<h4>8.3.20  PDN connectivity request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>PDN connectivity request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Request type</td>
    <td>Request type<br>9.9.4.14</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>PDN type</td>
    <td>PDN type<br>9.9.4.10</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td>D-</td>
    <td>ESM information transfer flag</td>
    <td>ESM information transfer flag<br>9.9.4.5</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>28</td>
    <td>Access point name</td>
    <td>Access point name<br>9.9.4.1</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-102</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr class="tr_bleu1">
    <td>C-</td>
    <td>Device properties</td>
    <td>Device properties<br>9.9.2.0A</td>
    <td>O</td>
    <td>TV</td>
    <td>1</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 10</td><td colspan="2"> M = 6, O = 4</td><td>4,12-361</td></tr>
 </tbody>
</table>
<br>
<a id="PDN_disconnect_reject"></a>
<h4>8.3.21  PDN disconnect reject</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>PDN disconnect reject message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>ESM cause</td>
    <td>ESM cause<br>9.9.4.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 6</td><td colspan="2"> M = 5, O = 1</td><td>4,7-257</td></tr>
 </tbody>
</table>
<br>
<a id="PDN_disconnect_request"></a>
<h4>8.3.22  PDN disconnect request</h4>
<table class="table_freq">
 <thead>
  <tr>
   <td>IEI</td>
   <td>Information Element</td>
   <td>Type/Reference</td>
   <td>Presence</td>
   <td>Format</td>
   <td>Length</td>
  </tr>
 </thead>
 <tbody>
  <tr class="tr_blanc">
    <td></td>
    <td>Protocol discriminator</td>
    <td>Protocol discriminator<br>9.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>EPS bearer identity</td>
    <td>EPS bearer identity<br>9.3.2</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Procedure transaction identity</td>
    <td>Procedure transaction identity<br>9.4</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>PDN disconnect request message identity</td>
    <td>Message type<br>9.8</td>
    <td>M</td>
    <td>V</td>
    <td>1</td>
  </tr>
  <tr class="tr_blanc">
    <td></td>
    <td>Linked EPS bearer identity</td>
    <td>Linked EPS bearer identity<br>9.9.4.6</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_bleu1">
    <td></td>
    <td>Spare half octet</td>
    <td>Spare half octet<br>9.9.2.9</td>
    <td>M</td>
    <td>V</td>
    <td>1/2</td>
  </tr>
  <tr class="tr_blanc">
    <td>27</td>
    <td>Protocol configuration options</td>
    <td>Protocol configuration options<br>9.9.4.11</td>
    <td>O</td>
    <td>TLV</td>
    <td>3-253</td>
  </tr>
  <tr><td colspan="3">Nb IEI = 7</td><td colspan="2"> M = 6, O = 1</td><td>4,7-257</td></tr>
 </tbody>
</table>
<br>

  </section>
  <footer>
    <p class="text-center">
      <a href="#" class="btn btn-info">Back to top</a>
    </p>
  </footer>

</div>
<script src="sga.js"></script>
</body>
</html>
