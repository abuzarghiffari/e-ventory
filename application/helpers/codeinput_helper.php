<?php

function codeItemAutomation()
{
  $ci = get_instance();
  $query = "SELECT max(code_items) as codeitm FROM items";
  $data = $ci->db->query($query)->row_array();
  $code = $data['codeitm'];
  $numCode = (int) substr($code, 3, 4);
  $numCode++;
  $char = "ITM";
  $newCode = $char . sprintf("%02s", $numCode);
  return $newCode;
}

function codeCategoryAutomation()
{
  $ci = get_instance();
  $query = "SELECT max(code_categories) as codectr FROM categories";
  $data = $ci->db->query($query)->row_array();
  $code = $data['codectr'];
  $numCode = (int) substr($code, 3, 4);
  $numCode++;
  $char = "CTR";
  $newCode = $char . sprintf("%02s", $numCode);
  return $newCode;
}

function codeSupplierAutomation()
{
  $ci = get_instance();
  $query = "SELECT max(code_suppliers) as codespl FROM suppliers";
  $data = $ci->db->query($query)->row_array();
  $code = $data['codespl'];
  $numCode = (int) substr($code, 3, 4);
  $numCode++;
  $char = "SPL";
  $newCode = $char . sprintf("%02s", $numCode);
  return $newCode;
}
