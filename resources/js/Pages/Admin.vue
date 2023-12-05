<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
  <v-app id="inspire">

    <!-- <v-app-bar
      class="px-3"
      border
      flat
      height="72"
    > -->
    <v-app-bar
        class="px-3"
        border
        flat
    >


    <div class="header_left">
        生徒氏名：<a href="../student/index.html" target="_blank">山田一郎</a>　ID:111　2004年3月4日生　最終ログイン2023年5月23日　
        <select>
          <option name="enrollment_status" value="1" selected>在籍中</option>
          <option name="enrollment_status" value="2">休塾中</option>
          <option name="enrollment_status" value="3">退塾</option>
        </select>
        <v-btn border>変更</v-btn>
    </div>
    <div class="header_right">
        鈴木一郎　
        <a href="mail1.html">一斉メール送信</a>
        <a href="message.html">連絡事項</a>
        <a href="#" class="small">パスワード変更</a>
        <v-btn border>ログアウト</v-btn>
    </div>






    </v-app-bar>



    <v-main>
        <div class="main_box">



        <div class="column2">
        <h1>授業内容登録</h1>
        <form name="lesson">
          <input type="date" value="2023-07-05" class="date"><br>  
          <label><input type="radio" name="lesson_type1" value="1" checked>通常授業</label>
          <label><input type="radio" name="lesson_type1" value="2" >振替授業</label> 
          <label><input type="radio" name="lesson_type1" value="3" >補習</label>
          <label><input type="radio" name="lesson_type1" value="4" >体験授業</label><br>

          <span class="bold">◎授業内容</span>
          <input type="button" value="授業内容をクリア" onClick="lesson_input_clear()">  
          <textarea class="lesson_input" name="content" rows="6">国語　古典　数学　図形，確率</textarea><br>

          <span class="bold">◎備考</span>
          <textarea class="remark_input" name="remark" rows="2"></textarea><br>
          <span class="bold">◎非公開メモ</span>

          <textarea class="remark_input" name="private_note" rows="2"></textarea><br>
          山田一郎の授業内容を
          <input type="button" value="追加する">
        </form>

        <h1>過去の授業</h1>
        <table>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              国語　古典<br>数学　図形，確率<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              数学　１次関数，確率<br>英語　長文読解<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">国語　文法<br>数学　平方根，三平方の定理<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
              <div class="private_note">
                [非公開メモ]p30の大問３まで。続きは次回。
              </div>
              <textarea class="private_note_input" name="private_note" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              <div class="private_note">
                [非公開メモ]修学旅行
              </div>
              <textarea class="private_note_input" name="private_note" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">数学　確率<br>理科　光，力<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <input type="button" value="変更" onClick="chg('2023年6月14日(水)通常授業の授業内容')">
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">数学　図形，確率，１次関数，連立方程式，２次関数<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr> 
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">国語　文法<br>数学　平方根，三平方の定理<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">数学　確率<br>理科　光，力<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <input type="button" value="変更" onClick="chg('2023年6月5日(月)通常授業の授業内容')">
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">数学　図形，確率，１次関数，連立方程式，２次関数<br>
              <textarea class="lesson_content_input" name="lesson_content" rows="2"></textarea>
              <v-btn border value="変更" onClick="" >変更</v-btn>
            </td>
          </tr>               
        </table>
        <div class="right">
          前の20件 <a href="#">次の20件</a>
        </div>
      </div>

      <div class="column3">        
        <h1>特記事項</h1>
        <p class="special_note">宿題忘れは必ず保護者に報告</p>
        <form>
          <textarea class="special_note_input" name="special_note" rows="2"></textarea>
          <v-btn border value="変更" onClick="" >変更</v-btn>
        </form>
        <h1>授業態度</h1>
        <p>良好</p>
        <form>
          <textarea class="atitude_input" name="attitude" rows="2"></textarea>
          <v-btn border value="変更" onClick="" >変更</v-btn>
        </form>

        <h1>授業方針</h1>
        <p>定期テスト対策と１年生の復習を並行して行っています。</p>
        <form>
          <textarea class="lesson_plan_input" name="lesson_plan_input" rows="2"></textarea>
          <v-btn border value="変更" onClick="" >変更</v-btn>
        </form>

        <h1>欠席・休塾日</h1>
        <input type="date" value="2023-07-05" class="date"><br>
        <label><input type="radio" name="lesson_type2" value="1" checked>通常授業</label>
        <label><input type="radio" name="lesson_type2" value="2" >振替授業</label> 
        <label><input type="radio" name="lesson_type2" value="3" >補習</label>
        <label><input type="radio" name="lesson_type2" value="4" >体験授業</label><br>
        <label><input type="radio" name="attendance" value="2">欠席</label>
        <label><input type="radio" name="attendance" value="3" checked>休塾日</label><br>
        <label><input type="radio" name="make_up_lesson" value="0" checked>振替授業可</label>
        <label><input type="radio" name="make_up_lesson" value="1">振替授業不可</label><br>      
        <label><input type="radio" name="refund" value="0">返金対応可</label>
        <label><input type="radio" name="refund" value="1" checked>返金対応不可</label><br>
        期限:<input class="deadline_input" type="text" name="deadline" value="92">日<br>
        <span class="bold">◎備考</span><br>
        <textarea class="remark_input" name="remark" rows="2"></textarea><br>
        <span class="bold">◎非公開メモ</span><br>
        <textarea class="remark_input" name="private_note" rows="2"></textarea><br>
        山田一郎の欠席・休塾日分を<input type="button" value="追加する">
        <hr>

        <p>未消化振替授業計２回</p>
        <table>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              <form>
                未受講<br><input class="processing_input" type="text" name="proceccing" value="">
                <v-btn border value="変更" onClick="" >変更</v-btn>
              </form>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              <form>
                未受講<br><input class="processing_input" type="text" name="proceccing" value="">
                <v-btn border value="変更" onClick="" >変更</v-btn>
              </form>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              <form>
                6月23日振替授業<br><input class="processing_input" type="text" name="proceccing" value="">
                <v-btn border value="変更" onClick="" >変更</v-btn>
              </form>
            </td>
          </tr>
          <tr>
            <td class="lesson1">
              <input type="button" value="×" onClick="del('2023年4月26日(水)休塾日分')">2023年4月26日(水)休塾日分　※暴風警報発令　※返金対応可
            </td>
          </tr>    
          <tr>
            <td class="lesson2">
              <form>
                11月12日返金<br><input class="processing_input" type="text" name="proceccing" value="">
                <v-btn border value="変更" onClick="" >変更</v-btn>
              </form>
          </td></tr>    
        </table>        
      </div>
  


      <div class="column4">
        <p>
          保護者氏名：<a href="../parent/index.html" target="_blank"><span class="bold">山田花子</span></a>
          <select>
            <option name="enrollment_status2" value="1" selected>在籍中</option>
            <option name="enrollment_status2" value="2">休塾中</option>
            <option name="enrollment_status2" value="3">退塾</option>
          </select>
          <button>変更</button><br>
          最終ログイン日：2023年5月23日
        </p>
        <form>
          <p>
            通常授業料：<input class="legular_tuition_money_text" type="text" name="tuition_money" value="30000">円、
            支払方法：<input class="legular_tuition_method_text" type="text" name="tuition_method" value="現金">
            <v-btn border value="変更" onClick="" >変更</v-btn>
          </p>
        </form>
        <h1>お支払予定授業料</h1>
        <form name="tuition">
          <p>
            <input type="button" value="↓反映" onClick="tuition_detail_input_1('2023年6月分授業料','6月初回授業','2023-06-30')">2023年6月分授業料(期限:6月初回授業)<br>
            <input type="button" value="↓反映" onClick="tuition_detail_input_1('2023年7月分授業料','7月初回授業','2023-07-31')">2023年7月分授業料(期限:7月初回授業)<br>
            <input type="button" value="↓反映" onClick="tuition_detail_input_1('2023年8月分授業料','8月初回授業','2023-08-31')">2023年8月分授業料(期限:8月初回授業)<br>
            明細:<input class="tuition_detail_text_1" type="text" name="tuition_detail" value="">
            期限:<input class="tuition_deadline_text_1" type="text" name="tuition_deadline" value="">
          </p>
          <p>
            発生日:<input type="date" id ="tuition_date" value="2023-07-05" class="date">
          </p>
          <p>
            請求備考:<input class="tuition_remark_text_1" type="text" name="tuition_remark" value="">
            <input class="tuition_money_text_1" type="text" name="tuition_type" value="30000">円
            <v-btn border value="変更" onClick="" >変更</v-btn>
          </p>
        </form>
        <table>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>    
          <tr>
            <td class="tuition2">
              <form>
                <input type="date" value="2023-07-05" class="date">&nbsp;
                支払方法：<input class="legular_tuition_method_text" type="text" name="tuition_method" value="現金"><br>
                領収備考:<input class="tuition_remark_text_2" type="text" name="tuition_remark" value="">
                <input class="tuition_money_text_1" type="text" name="tuition_type" value="20000">円
                <input type="button" value="支払済">
              </form>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>   
          <tr>
            <td class="tuition2">
              <form>
                <input type="date" value="2023-07-05" class="date">&nbsp;
                支払方法：<input class="legular_tuition_method_text" type="text" name="tuition_method" value="現金"><br>
                領収備考:<input class="tuition_remark_text_2" type="text" name="tuition_remark" value="">
                <input class="tuition_money_text_1" type="text" name="tuition_type" value="3000">円
                <input type="button" value="支払済">
              </form>
            </td>
          </tr>
          <tr>
            <td class="lesson1 m-0 p-0">
              <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>
            </td>
          </tr>   
          <tr>
            <td class="tuition2">
              <form>
                <input type="date" value="2023-07-05" class="date">&nbsp;
                支払方法：<input class="legular_tuition_method_text" type="text" name="tuition_method" value="現金"><br>
                領収備考:<input class="tuition_remark_text_2" type="text" name="tuition_remark" value="">
                <input class="tuition_money_text_1" type="text" name="tuition_type" value="-1500">円
                <input type="button" value="支払済">
              </form>
            </td>
          </tr>
        </table>
        <p>お支払予定授業料合計：<span class="bold">21,500円</span></p>

        <h1>お支払い済み授業料</h1>
        <v-data-iterator items-per-page="10" :items="items" :page="page" >
          <table>
            <tr>
              <td class="lesson1 m-0 p-0">
                <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>2023年4月26日(水)休塾日分　※暴風警報発令　※返金対応可
              </td>
            </tr>    
            <tr>
              <td class="lesson2 m-0 p-0">
                <v-btn class="m-0 p-0" variant="text" icon="mdi-close-circle" color="red-lighten-2"></v-btn>2023年4月26日(水)休塾日分　※暴風警報発令　※返金対応可
              </td>
            </tr>    
          </table> 
        </v-data-iterator>
        <v-row>
          <v-col cols="auto " class="m-0 p-0">
            <v-btn class="mr-2 p-0" color="indigo" icon="mdi-arrow-left"></v-btn>
          </v-col>
          <v-spacer></v-spacer>
          <v-col cols="auto" class="m-0 p-0 " >
            <v-btn class="m-0 p-0" color="indigo" icon="mdi-arrow-right"></v-btn>
          </v-col>
        </v-row>
      </div>







</div>

















    </v-main>
    <v-navigation-drawer width="244">







      <div class="column1">
        <h1>在塾生</h1>
        <nav>
          <ul>
          <li class="current"><a href="admin.html">山田一郎</a></li>
          <li><a href="admin.html">田中二郎</a></li>
          <li><a href="admin.html">高橋三郎</a></li>  
          <li><a href="admin.html">鈴木四郎</a></li>
          <li><a href="admin.html">佐藤五郎</a></li>   
          <li><a href="admin.html">山田六郎</a></li>
          <li><a href="admin.html">田中七郎</a></li>
          <li><a href="admin.html">高橋八郎</a></li>  
          <li><a href="admin.html">鈴木九郎</a></li>
          <li><a href="admin.html">佐藤十郎</a></li>   
          <li><a href="admin.html">山田十一郎</a></li>
          <li><a href="admin.html">田中十二郎</a></li>
          <li><a href="admin.html">高橋十三郎</a></li>  
          <li><a href="admin.html">鈴木十四郎</a></li>
          <li><a href="admin.html">佐藤十五郎</a></li>        
          <li><a href="admin.html">山田十六郎</a></li>
          <li><a href="admin.html">田中十七郎</a></li>
          <li><a href="admin.html">高橋十八郎</a></li>  
          <li><a href="admin.html">鈴木十九郎</a></li>
          <li><a href="admin.html">佐藤二十郎</a></li>        
          <li><a href="admin.html">山田２１郎</a></li>
          <li><a href="admin.html">田中２２郎</a></li>
          <li><a href="admin.html">高橋２３郎</a></li>  
          <li><a href="admin.html">鈴木２４郎</a></li>
          <li><a href="admin.html">佐藤２５郎</a></li>        
          <li><a href="admin.html">山田２６郎</a></li>
          <li><a href="admin.html">田中２７郎</a></li>
          <li><a href="admin.html">高橋２８郎</a></li>  
          <li><a href="admin.html">鈴木２９郎</a></li>
          <li><a href="admin.html">佐藤３０郎</a></li>
          </ul>
        </nav>
        <h1>休塾生</h1>
        <nav>
          <ul>
          <li><a href="admin.html">山田３１郎</a></li>
          <li><a href="admin.html">山田３２郎</a></li>
          <li><a href="admin.html">山田３３郎</a></li>
          </ul>
        </nav>
        <h1>退塾生</h1>
        <nav>
          <ul>
          <li><a href="admin.html">田中３４郎</a></li>
          <li><a href="admin.html">高橋３５郎</a></li>  
          <li><a href="admin.html">鈴木３６郎</a></li>
          <li><a href="admin.html">佐藤３７郎</a></li>   
          <li><a href="admin.html">山田３８郎</a></li>
          <li><a href="admin.html">田中３９郎</a></li>
          <li><a href="admin.html">高橋４０郎</a></li>  
          <li><a href="admin.html">鈴木４１郎</a></li>
          <li><a href="admin.html">佐藤４１郎</a></li>   
          <li><a href="admin.html">山田４３郎</a></li>
          <li><a href="admin.html">田中４４郎</a></li>
          <li><a href="admin.html">高橋４５郎</a></li>  
          <li><a href="admin.html">鈴木４６郎</a></li>
          <li><a href="admin.html">佐藤４７郎</a></li>
          </ul>
        </nav>
      </div>





















    </v-navigation-drawer>


    <v-footer
      app
      height="72"
    >
      <v-text-field
        bg-color="grey-lighten-1"
        class="overflow-hidden"
        density="compact"
        flat
        hide-details
        rounded="pill"
        variant="solo-filled"
      ></v-text-field>
    </v-footer>
  </v-app>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
export default {
  data: () => ({
    page: 1,
    items: Array.from({ length: 15 }, (k, v) => ({
      title: 'Item ' + v ,
      text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, ratione debitis quis est labore voluptatibus! Eaque cupiditate minima, at placeat totam, magni doloremque veniam neque porro libero rerum unde voluptatem!',
    })),
  }),
}
</script>