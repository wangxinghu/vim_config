Vim�UnDo� ?�"����3K��t��7��}���L�B �.   +   4    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);                             T��=    _�                             ����                                                                                                                                                                                                                                                                                                                                                             T��(     �                   5�_�                            ����                                                                                                                                                                                                                                                                                                                            )  >                  V        T��7     �   (   *         ?                                    //                                                                                                                                                                                                                                                                                        }�   '   )         I                                    //                                                                                                                                                                                                                                                                                    return $result;�   &   (         2                                    //                                                                                                                                                                                                                                                                            �   %   '         <                                    //                                                                                                                                                                                                                                                                    //trackLog($info);�   $   &         6                                    //                                                                                                                                                                                                                                                            $info['url'] = $url;�   #   %                                             //                                                                                                                                                                                                                                                    //log�   "   $                                             //                                                                                                                                                                                                                                            �   !   #                                             //                                                                                                                                                                                                                                    curl_close($curl);�       "                                             //                                                                                                                                                                                                                            //var_dump($result);�      !                                             //                                                                                                                                                                                                                    $result = curl_exec($curl);�                                                    //                                                                                                                                                                                                            curl_setopt($curl, CURLOPT_TIMEOUT,$timeout);�                                                   //                                                                                                                                                                                                    //设置超时实现异步�               "                                    //                                                                                                                                                                                            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($info));�                &                                    //�               
                                    //                                                                                                                                                                                    //curl_setopt($curl,CURLOPT_COOKIEFILE,$cookie);�                �                                    //                                                                                                                                                                            curl_setopt($curl, CURLOPT_POST, 1); �                �                                    //                                                                                                                                                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); �                �                                    //                                                                                                                                                            curl_setopt($curl, CURLOPT_HEADER, 0); �                �                                    //                                                                                                                                                    �                �                                    //                                                                                                                                            }�                �                                    //                                                                                                                                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);�                �                                    //                                                                                                                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);�                �                                    //                                                                                                            if($scheme == 'https'){�                �                                    //                                                                                                    �                �                                    //                                                                                            curl_setopt($curl, CURLOPT_URL, $url);�                �                                    //                                                                                    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);�                r                                    //                                                                            �                �                                    //                                                                    $scheme = $urls['scheme'];�                �                                    //                                                            $header = array("Host:$host");�                p                                    //                                                    $host = $urls['host'];�   
             j                                    //                                            $urls = parse_url($url);�   	             ^                                    //                                    $curl = curl_init();�      
          B                                    //                            �      	          ;                                    //                    }�                U                                    //            //$url = $structConfig['trackUrl'];�                `                                                //$structConfig = (array) Ko::config('struct');;�                1                                    return false;�                                 if(empty($url)){�                    {   5�_�                           ����                                                                                                                                                                                                                                                                                                                                      )   	          	    T��D     �              $   8        //$structConfig = (array) Ko::config('struct');;   9        //            //$url = $structConfig['trackUrl'];           //                    }   &        //                               B        //                                    $curl = curl_init();   N        //                                            $urls = parse_url($url);   T        //                                                    $host = $urls['host'];   d        //                                                            $header = array("Host:$host");   h        //                                                                    $scheme = $urls['scheme'];   V        //                                                                               �        //                                                                                    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);   �        //                                                                                            curl_setopt($curl, CURLOPT_URL, $url);   n        //                                                                                                       �        //                                                                                                            if($scheme == 'https'){   �        //                                                                                                                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   �        //                                                                                                                                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);   �        //                                                                                                                                            }   �        //                                                                                                                                                       �        //                                                                                                                                                            curl_setopt($curl, CURLOPT_HEADER, 0);    �        //                                                                                                                                                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);    �        //                                                                                                                                                                            curl_setopt($curl, CURLOPT_POST, 1);    �        //                                                                                                                                                                                    //curl_setopt($curl,CURLOPT_COOKIEFILE,$cookie);   
        //          //                                                                                                                                                                                            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($info));   �        //                                                                                                                                                                                                    //设置超时实现异步          //                                                                                                                                                                                                            curl_setopt($curl, CURLOPT_TIMEOUT,$timeout);   �        //                                                                                                                                                                                                                    $result = curl_exec($curl);   �        //                                                                                                                                                                                                                            //var_dump($result);           //                                                                                                                                                                                                                                    curl_close($curl);   �        //                                                                                                                                                                                                                                                      //                                                                                                                                                                                                                                                    //log          //                                                                                                                                                                                                                                                            $info['url'] = $url;           //                                                                                                                                                                                                                                                                    //trackLog($info);          //                                                                                                                                                                                                                                                                              -        //                                                                                                                                                                                                                                                                                    return $result;  #        //                                                                                                                                                                                                                                                                                        }5�_�                            ����                                                                                                                                                                                                                                                                                                                                      )          V       T��J     �   (   *         !                                                                                                                                                                                                                                                                                                }�   '   )         +                                                                                                                                                                                                                                                                                            return $result;�   &   (                                                                                                                                                                                                                                                                                             �   %   '                                                                                                                                                                                                                                                                                     //trackLog($info);�   $   &                                                                                                                                                                                                                                                                             $info['url'] = $url;�   #   %                                                                                                                                                                                                                                                                     //log�   "   $          �                                                                                                                                                                                                                                                    �   !   #          �                                                                                                                                                                                                                                            curl_close($curl);�       "          �                                                                                                                                                                                                                                    //var_dump($result);�      !          �                                                                                                                                                                                                                            $result = curl_exec($curl);�                                                                                                                                                                                                                                    curl_setopt($curl, CURLOPT_TIMEOUT,$timeout);�                �                                                                                                                                                                                                            //设置超时实现异步�                                                                                                                                                                                                                   curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($info));�                        �                �                                                                                                                                                                                            //curl_setopt($curl,CURLOPT_COOKIEFILE,$cookie);�                �                                                                                                                                                                                    curl_setopt($curl, CURLOPT_POST, 1); �                �                                                                                                                                                                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); �                �                                                                                                                                                                    curl_setopt($curl, CURLOPT_HEADER, 0); �                �                                                                                                                                                            �                �                                                                                                                                                    }�                �                                                                                                                                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);�                �                                                                                                                                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);�                �                                                                                                                    if($scheme == 'https'){�                l                                                                                                            �                �                                                                                                    curl_setopt($curl, CURLOPT_URL, $url);�                �                                                                                            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);�                T                                                                                    �                f                                                                            $scheme = $urls['scheme'];�                b                                                                    $header = array("Host:$host");�                R                                                            $host = $urls['host'];�   
             L                                                    $urls = parse_url($url);�   	             @                                            $curl = curl_init();�      
          $                                    �      	                                      }�                7                    //$url = $structConfig['trackUrl'];5�_�                           ����                                                                                                                                                                                                                                                                                                                                      )          V       T��Q     �                6        $structConfig = (array) Ko::config('struct');;5�_�                           ����                                                                                                                                                                                                                                                                                                                                      (          V       T��R    �                +        //$url = $structConfig['trackUrl'];5�_�                    '       ����                                                                                                                                                                                                                                                                                                                                      '          V       T��b     �   '               �   '            5�_�      	              )       ����                                                                                                                                                                                                                                                                                                                                      '          V       T���     �   (              
$url = '';5�_�      
           	   )      ����                                                                                                                                                                                                                                                                                                                                      '          V       T���    �   )               �   )            5�_�   	              
   *        ����                                                                                                                                                                                                                                                                                                                                      '          V       T���     �   )              trackData(array(), $url);5�_�   
                 *       ����                                                                                                                                                                                                                                                                                                                                      '          V       T���    �   *               �   *            5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             T��    �         ,          �         +    5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             T��3     �                    var_dump($header);5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             T��<    �         +      4    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);5��