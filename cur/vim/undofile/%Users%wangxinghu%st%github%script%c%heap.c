Vim�UnDo� �
��9�����G0��n�߅ӶgKR$=�W�   7                                   U.Q    _�                             ����                                                                                                                                                                                                                                                                                                                                                             Uv     �                   5�_�                            ����                                                                                                                                                                                                                                                                                                                                       7                 U.K     �              4   0//void HeapAdjust(int array[],int i,int nLength)   //{   //    int nChild;   //        int nTemp;   *//            for(;2*i+1<nLength;i=nChild)   //                {   H//                        //子结点的位置=2*（父结点位置）+1   ///                                nChild=2*i+1;   M//                                        //得到子结点中较大的结点   n//                                                if(nChild<nLength-1&&array[nChild+1]>array[nChild])++nChild;   �//                                                        //如果较大的子结点大于父结点那么把较大的子结点往上移动，替换它的父结点   \//                                                                if(array[i]<array[nChild])   K//                                                                        {   e//                                                                                    nTemp=array[i];   y//                                                                                                array[i]=array[nChild];   �//                                                                                                            array[nChild]=nTemp;    w//                                                                                                                    }   �//                                                                                                                            else break; //否则退出循环   �//                                                                                                                                }   �//                                                                                                                                }   �//                                                                                                                                //堆排序算法   �//                                                                                                                                void HeapSort(int array[],int length)   �//                                                                                                                                {   �//                                                                                                                                    int i;   �//                                                                                                                                        //调整序列的前半部分元素，调整完之后第一个元素是序列的最大的元素   �//                                                                                                                                            //length/2-1是最后一个非叶节点，此处"/"为整除   �//                                                                                                                                                for(i=length/2-1;i>=0;--i)   �//                                                                                                                                                    HeapAdjust(array,i,length);  //                                                                                                                                                        //从最后一个元素开始对序列进行调整，不断的缩小调整的范围直到第一个元素   �//                                                                                                                                                            for(i=length-1;i>0;--i)   �//                                                                                                                                                                {   �//                                                                                                                                                                        //把第一个元素和当前的最后一个元素交换，  //                                                                                                                                                                                //保证当前的最后一个位置的元素都是在现在的这个序列之中最大的   �//                                                                                                                                                                                        array[i]=array[0]^array[i];   �//                                                                                                                                                                                                array[0]=array[0]^array[i];   �//                                                                                                                                                                                                        array[i]=array[0]^array[i];  ;//                                                                                                                                                                                                                //不断缩小调整heap的范围，每一次调整完毕保证第一个元素是当前序列的最大值   �//                                                                                                                                                                                                                        HeapAdjust(array,0,i);   �//                                                                                                                                                                                                                            }   �//                                                                                                                                                                                                                            }   �//                                                                                                                                                                                                                            int main()   �//                                                                                                                                                                                                                            {   �//                                                                                                                                                                                                                                int i;  //                                                                                                                                                                                                                                    int num[]={9,8,7,6,5,4,3,2,1,0};  //                                                                                                                                                                                                                                        HeapSort(num,sizeof(num)/sizeof(int));  //                                                                                                                                                                                                                                            for(i=0;i<sizeof(num)/sizeof(int);i++)   �//                                                                                                                                                                                                                                                {  //                                                                                                                                                                                                                                                        printf("%d ",num[i]);   �//                                                                                                                                                                                                                                                            }  //                                                                                                                                                                                                                                                                printf("\nok\n");  //                                                                                                                                                                                                                                                                    return 0;  //                                                                                                                                                                                                                                                                    }5�_�                             ����                                                                                                                                                                                                                                                                                                                                       7         V      U.P    �   6   8                                                                                                                                                                                                                                                                             }�   5   7                                                                                                                                                                                                                                                                             return 0;�   4   6                                                                                                                                                                                                                                                                         printf("\nok\n");�   3   5          �                                                                                                                                                                                                                                                            }�   2   4                                                                                                                                                                                                                                                                 printf("%d ",num[i]);�   1   3          �                                                                                                                                                                                                                                                {�   0   2                                                                                                                                                                                                                                                     for(i=0;i<sizeof(num)/sizeof(int);i++)�   /   1                                                                                                                                                                                                                                                 HeapSort(num,sizeof(num)/sizeof(int));�   .   0                                                                                                                                                                                                                                             int num[]={9,8,7,6,5,4,3,2,1,0};�   -   /          �                                                                                                                                                                                                                                int i;�   ,   .          �                                                                                                                                                                                                                            {�   +   -          �                                                                                                                                                                                                                            int main()�   *   ,          �                                                                                                                                                                                                                            }�   )   +          �                                                                                                                                                                                                                            }�   (   *          �                                                                                                                                                                                                                        HeapAdjust(array,0,i);�   '   )         9                                                                                                                                                                                                                //不断缩小调整heap的范围，每一次调整完毕保证第一个元素是当前序列的最大值�   &   (          �                                                                                                                                                                                                        array[i]=array[0]^array[i];�   %   '          �                                                                                                                                                                                                array[0]=array[0]^array[i];�   $   &          �                                                                                                                                                                                        array[i]=array[0]^array[i];�   #   %         	                                                                                                                                                                                //保证当前的最后一个位置的元素都是在现在的这个序列之中最大的�   "   $          �                                                                                                                                                                        //把第一个元素和当前的最后一个元素交换，�   !   #          �                                                                                                                                                                {�       "          �                                                                                                                                                            for(i=length-1;i>0;--i)�      !                                                                                                                                                                  //从最后一个元素开始对序列进行调整，不断的缩小调整的范围直到第一个元素�                 �                                                                                                                                                    HeapAdjust(array,i,length);�                �                                                                                                                                                for(i=length/2-1;i>=0;--i)�                �                                                                                                                                            //length/2-1是最后一个非叶节点，此处"/"为整除�                �                                                                                                                                        //调整序列的前半部分元素，调整完之后第一个元素是序列的最大的元素�                �                                                                                                                                    int i;�                �                                                                                                                                {�                �                                                                                                                                void HeapSort(int array[],int length)�                �                                                                                                                                //堆排序算法�                �                                                                                                                                }�                �                                                                                                                                }�                �                                                                                                                            else break; //否则退出循环�                u                                                                                                                    }�                �                                                                                                            array[nChild]=nTemp; �                w                                                                                                array[i]=array[nChild];�                c                                                                                    nTemp=array[i];�                I                                                                        {�                Z                                                                if(array[i]<array[nChild])�                �                                                        //如果较大的子结点大于父结点那么把较大的子结点往上移动，替换它的父结点�                l                                                if(nChild<nLength-1&&array[nChild+1]>array[nChild])++nChild;�                K                                        //得到子结点中较大的结点�   
             -                                nChild=2*i+1;�   	             F                        //子结点的位置=2*（父结点位置）+1�      
                          {�      	          (            for(;2*i+1<nLength;i=nChild)�                        int nTemp;5��