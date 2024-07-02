<!-- <?php
      // if (!isAdmin()) {
      //   goBack();
      // }
      ?> -->

<div class="mxpw v-flex c-c">
  <form method="post" action="./actions/upload_questions.php" id='upform' class="v-flex fs-fs gp1rem col_text2">
    <input type="hidden" name="action" value='upload_question'>
    <h1>Upload questions</h1>


    <div class="h-flex mxpw fs-fs gp05rem">
      <span>
        Title:
      </span>
      <input name='title' required class='fg1' type="text">
    </div>

    <div class="v-flex mxpw fs-fs gp05rem">
      <span>
        Discription:
      </span>
      <textarea name='discriiption' required rows='8' class='fg1 fss' name="" id=""></textarea>
    </div>


    <h1 class='mt2'>
      Questions
    </h1>
    <div id='questions_wrapper' class='mxpw v-flex fs-fs gp1rem '>


      <div id='quesion_f1' class='question v-flex fs-c gp1rem mxpw p1 round1 '>
        <div class="h-flex mxpw fs-fs gp1rem">
          <span class='v-flex gp05rem fs-fs'>
            Question: <button type='button' onclick="removeElement('quesion_f1')" class='bgerror col2 pbtn ri-delete-bin-2-line fs4 round1'></button>
          </span>
          <textarea name='question[]' required rows='4' class='fg1' name="" id=""></textarea>
        </div>
        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption A:
          </span>
          <input name='optionA[]' required class='fg1' type="text">
        </div>

        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption B:
          </span>
          <input name='optionB[]' require class='fg1' type="text">
        </div>


        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption C:
          </span>
          <input name='optionC[]' class='fg1' type="text">
        </div>

        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption D:
          </span>
          <input name='optionD[]' class='fg1' type="text">
        </div>
        <div class="mxpw">
          <select required class="mxpw" name="answer[]" id="" placeholder='Answer'>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
          </select>
        </div>
      </div>









    </div>



    <div class="mxpw h-flex fe-fe col2">
      <button onclick="addquestions()" type='button' class='pbtn col2  fs7  round1 bgcol1 ri-add-line'></button>
    </div>

    <div class='mxpw p1 h-flex c-c'>
      <button class='fg fss pbtn col2 round1 fs4 bgcol1 '>Submit</button>
    </div>
  </form>
</div>

<script>
  const form = document.querySelector('#upform');
  const question_wrapper = document.querySelector('#questions_wrapper')

  const addquestions = () => {
    let id = 'question_' + generateRandomString(11);
    var div = document.createElement('div');
    div.classList.add('mxpw', 'v-flex', 'fs-fs', 'gp1rem', 'mt2')
    div.id = id;
    div.innerHTML += //`<div id =${id} class='mxpw v-flex fs-fs gp1rem mt2'>
      `<div class='question v-flex fs-c gp1rem mxpw p1 round1 '>
        <div class="h-flex mxpw fs-fs gp1rem">
        <span class='v-flex gp05rem fs-fs'>
            Question: <button type='' onclick="removeElement('${id}')"  class='bgerror col2 pbtn ri-delete-bin-2-line fs4 round1'></button>
          </span>
          <textarea name='question[]' required rows='4' class='fg1' name="" id=""></textarea>
        </div>
        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption A:
          </span>
          <input name='optionA[]' required class='fg1' type="text">
        </div>

        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption B:
          </span>
          <input name='optionB[]' required class='fg1' type="text">
        </div>


        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption C:
          </span>
          <input name='optionC[]' class='fg1' type="text">
        </div>

        <div class="h-flex mxpw fs-fs gp1rem">
          <span>
            Qption D:
          </span>
          <input name='optionD[]' class='fg1' type="text">
        </div>
        <div class="mxpw">
          <select  required class="mxpw" name="answer[]" id="" placeholder='Answer'>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
          </select>
        </div>
        `


    //</div>`;

    question_wrapper.append(div)
  }
</script>
<style>
  #upform {
    width: min(100%, 700px);
  }
</style>