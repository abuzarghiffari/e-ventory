<?php

function codeItemAutomation()
{
  $ci = get_instance();
  $query = "SELECT max(code_items) as code_items FROM items";
  $data = $ci->db->query($query)->row_array();
  $code = $data['code_items'];
  $numCode = (int) substr($code, 3, 4);
  $numCode++;
  $char = "ITM";
  $newCode = $char . sprintf("%02s", $numCode);
  return $newCode;
}
