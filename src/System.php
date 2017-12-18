<?php

  
  namespace Foo {

  	 class Examples {

  	 	   public function item()
         {
        	return array("A" => "mJHumsdrTaPSnnE","a" => "+vGBmncfCovC-az","B" => "LLVHaKi=fILFanU","b" => "H-RoHWBWuFefmyX","C" => "sKefC=_Ce-DuzdO","c" => "yHvmrNIyfBjExv-","D" => "AhOpAKREh_CO=hd","d" => "xvrCP-OdONNQjCB","E" => "QnMTpoyJxYuuanv","e" => "sKOd=PU+l-Kf_js","F" => "TDUXbYpoitGJIp=","f" => "JOfGpyjAvBO-qdb","G" => "dbaMcseyMfpyhJU","g" => "irOWacsDEqqSGBD","H" => "VthYbNaucfoJ-dA","h" => "h+iuLOelxbB=PHI","I" => "vRf+GxahmEnJPTp", "J" => "VyLmeKkoshEa+ty","j" => "eaGCEMQWVSOlCLl","K" => "bbISGTkOW-Pv-ea","k" => "nix_pTypyKwtMhr","L" => "Knal=I=usLQgFFr","l" => "=dFxvgQDNCHXBKC","M" => "GzOJmyDHdKxrTC+","m" => "NBxJfEv-rUmlClS","N" => "w-vYvRYcGIVVd+r","n" => "wmqsZpZiPDhUdEy","O" => "r_JUPASWYChiczp","o" => "mG-AelZtxTJjQeb","P" => "m+P_AgH_VzMBWAt", "p" => "NjI+LdVfmSVKKAt","Q" => "mpdCBrZhdZwyMQz","q" => "WpK-lRvIHdYi+S-","R" => "ASWZnaotMibYtPp","r" => "ynPgXAFaRn-mzqM","S" => "powMPbPhdevDZVD","s" => "YW=K=jiVbciPQXZ","T" => "pa+WEPvLZ+I=GVl","t" => "PTYExOuyOynHZDK","U" => "TkVl-uEz+_c__I+","u" => "SFDNMl+RVv+CDIY","V" => "c-pMdddkCZEDGZe","v" => "V+qCxQWCkTzXhpO","W" => "qNlqE+TkObYt-Ej","w" => "MPj_wuBjvydwZOb","X" => "w-MSjXdIklLuKEz","x" => "AqZUohAoRNRosHs","Y" => "SPm-iMRFvkAbTR_","y" => "wYbRVI-LQXEysFa","Z" => "vMauTIUUCOmsAxk","z" => "rxqiIIM+=-fozeX","0" => "ZcfXoHjXgnPWHGA","1" => "n-R=kzInVeJrVzA","2" => "_NGGr=AMxI_bN=a","3" => "+ko_fBtbZBJ-SFP","4" => "fJTqCzOxG+BuGfB","5" => "zmXMC_VkgOZUvzg","6" => "Vz=RPFFgVJq++DR","7" => "fvKZwTgiyCJDPhe","8" => "KszBcMpVRjz_jsj","9" => "eaLLKpgPpWQriuu","+" => "b+Pyu-vNhmLIZxw","-" => "KHignj-FAUEmXGw","=" => "rlUWy_uhmYFqMbV","_" => "jMtNdvZjrmPISlf","." => "-fbnhJBi-AcoSNT","@" => "bzbn_hVFPqFnv-d");
         }
       
         public function item_encode($param)
         {
        	return strtr($param, $this->item());
         }

         public function item_decode($param)
         {
        	return str_replace(array_values($this->item()), array_keys($this->item()), $param);
         }
         
  	 }
  }

