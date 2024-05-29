<form class="v-flex gp1rem c-c max700 col2">

  <h1 class='mxpw algn_l'>
    Title
  </h1>
  <div class='v-flex c-c mxpw'>

    <span>
      (Q1) Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis amet iusto eligendi voluptate dolore minus, tenetur nemo doloribus dignissimos alias, quam repellendus vel vero ad explicabo! Itaque iste illo vel.
    </span>

    <div class='mxpw v-flex gp05rem mt1'>
      <div class='h-flex fs-fs gp1rem'>
        <input name='q1' class='option_radio' id='q1op1' type="radio">
        <label for='q1op1' class='pbtn  round1 mxpw option' for="op1">
          A dsakd askjd as djsak djkas jkdsa jkd askj djask
        </label>
      </div>

      <div class='h-flex fs-fs gp1rem'>
        <input name='q1' class='option_radio' id='q1op3' type="radio">
        <label for='q1op3' class='pbtn  round1 mxpw option' for="op1">
          A dsakd askjd as djsak djkas jkdsa jkd askj djask
        </label>
      </div>


      <div class='h-flex fs-fs gp1rem'>
        <input name='q1' class='option_radio' id='q1op2' type="radio">
        <label for='q1op2' class='pbtn  round1 mxpw option' for="op1">
          A dsakd askjd as djsak djkas jkdsa jkd askj djask
        </label>
      </div>
    </div>
  </div>


  <div class='mxpw'> 
    <button class='mxpw pbtn'>Submit</button>
  </div>
</form>


<style>
  input:checked+.option {
    background: var(--col_info);
  }
  .option_radio{
    opacity: 0;
    position:fixed;
    z-index: -1;
  }
</style>
