<?php foreach($redirect as $u) {
  $url = "../inclusion/invoice/".$u->id_pemasukan;
?>
<script type="text/javascript">
document.location.href="<?=$url?>";
</script>
<?php
}