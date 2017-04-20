<!DOCTYPE html>
<html lang="en">
  <form id="s" method="post">
   <select name="config">
   <?php
   $configs = array("authenticating.bgp.peerings", "basic.bgp.routing", "basic.bgp.routing.with.aggregation", "basic.eigrp.routing", "basic.ip.addressing", "basic.ospf.routing", "basic.rip.routing", "bgp.confederation", "bgp.disable.connected.check", "bgp.full", "bgp.next.hop.processing.manual.modification", "bgp.next.hop.processing.next.hop.self", "bgp.over.gre", "bgp.redistribute.internal", "bgp.remove.private.as", "bgp.update.source", "dmvpn", "ebgp.multihop", "ebgp.with.r9.to.r10", "ibgp.route.reflection", "ibgp.synchronization", "initial.bgp", "initial.bgp.base", "initial.dhcp.authorized.arp", "initial.dhcp.information.option", "initial.eigrp", "initial.multicast", "initial.ospf", "initial.rip", "inter.domain.multicast", "inter.domain.multicast.msdp", "ipsec.vpn", "large.scale.ibgp.route.reflection", "mpls.bgp.soo.attribute", "mpls.eigrp.site.of.origin", "mpls.internet.access", "mpls.label.filtering", "mpls.ldp", "mpls.mp.bgp.prefix.filtering", "mpls.mp.bgp.vpnv4", "mpls.ospf.sham.link", "mpls.pe.ce.routing.with.bgp", "mpls.pe.ce.routing.with.eigrp", "mpls.pe.ce.routing.with.ospf", "mpls.pe.ce.routing.with.rip", "mpls.vpn.performance.tuning", "mpls.vrf.lite");
    foreach($configs as $config){
         ?>
      <option value="<?php echo strtolower($config); ?>"><?php echo $config;?></option>
      <?php
      }
      ?>
  </select>
<input type="submit" name="Submit" value="Send">
</form>


<?php
if(isset($_POST['config'])) {
$configfile = $_POST['config'];
echo "$configfile";
$command_result = shell_exec ('/opt/configloop.sh "'.$configfile.'" > /var/log/nginx/debug.log 2>&1 &');
//echo "$command_result";
}
?>
</body>
</html>
