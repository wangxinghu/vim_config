Vim�UnDo� r��0��aM�G%��N.ȶL5k#�1R�^   k                                   UQ�4    _�                              ����                                                                                                                                                                                                                                                                                                                                       k           V        UQ�3    �   g   i          	}�   f   h          		return true;�   e   g          `		file_put_contents( "tmp/update_mongo_connection_success.log", $snsid . "\r\n" , FILE_APPEND );�   d   f          	{�   c   e          	else�   b   d          	}�   a   c          		return false;�   `   b          _		file_put_contents( "tmp/update_mongo_connection_failed.log", $snsid . "\r\n" , FILE_APPEND );�   _   a          	{�   ^   `          	if( empty( $rs ) )�   ]   _          l	$rs = $collection->update( $where, array('$set' => array("gifts" => $giftsData)) , array("upsert"=>true) );�   \   ^          	�   [   ]          #	echo "after:\t".$giftsData."\r\n";�   Z   \          	�   Y   [          !	$giftsData = serialize( $rows );�   X   Z          	�   W   Y          	}�   V   X          5		$rows[$tmp_itemid] = $rows[$tmp_itemid] + $tmp_num;�   U   W          	{�   T   V          	else�   S   U          	}�   R   T           		$rows[$tmp_itemid] = $tmp_num;�   Q   S          	{�   P   R          "	if( empty( $rows[$tmp_itemid] ) )�   O   Q          	$tmp_num	= $add_num;�   N   P          	$tmp_itemid = 690009;�   M   O          	�   L   N          	$rows  = unserialize( $rows );�   K   M          	�   J   L          #	echo "before:\t" . $rows . "\r\n";�   I   K          #	echo "snsid:\t" . $snsid . "\r\n";�   H   J          	�   G   I          	$rows  = $rs['gifts'];�   F   H          	�   E   G          	}�   D   F          		return false;�   C   E          Q		file_put_contents( "tmp/got_gifts_failed.log", $snsid . "\r\n" , FILE_APPEND );�   B   D          	{�   A   C          	if( empty($rs) )�   @   B          	�   ?   A          /	$rs    	     = $collection->findOne( $where );�   >   @          +	$where 	     = array( "touid" => $snsid );�   =   ?          	�   <   >          	}�   ;   =          		return false;�   :   <          \		file_put_contents( "tmp/got_mongo_connection_failed.log", $snsid . "\r\n" , FILE_APPEND );�   9   ;          	{�   8   :          	if( empty( $collection ) )�   7   9          =	$collection  = getMongoConnection( $uid , 'gift_received' );�   0   2          		�   .   0          	$loop_num++;�   -   /          	�   ,   .          $	addSpecialGift( $uid, $snsid , 1 );�   +   -          	�   *   ,          	}�   )   +          		continue;�   (   *          Q		file_put_contents( "tmp/found_uid_failed.log", $snsid . "\r\n" , FILE_APPEND );�   '   )          	{�   &   (          	if( empty( $uid ) )�   %   '          	$uid   = getUid( $snsid );�   $   &          	�   #   %          //	$add_num = $tmp_arr[1] - 1;�   "   $          	�   !   #          	}�       "          		continue;�      !          	if( empty( $snsid ) ){�                 	�                	$snsid = trim( $line ); �                	//$snsid   = $tmp_arr[0];�                $	//$tmp_arr = explode( ":" , $line);�                	�                	$line  = fgets( $handle );�                	�                	*/�                	}�                		break;�                	{�                	if( $loop_num >= 10 )�                	/*5��