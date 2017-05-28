<div id="wrapper">
    <div id="content">


        {foreach from=$result_list item=article}
            <article>
                <h3>{$article.title }</h3>
                <p>{$article.date}</p>
                <p class="thick">{$article.headline}</p>
                <content> {$article.content} </content> <br />
                <img src="{$article.image}" alt="{$article.alt}" />

            </article>
        {/foreach}

    </div>
    <div id="sidebar">
      <h3>Pictures of the week:</h3>

        {foreach from=$result_list2 item=image}
          <img src="{$image.image}" alt="{$image.alt}" /> <br />
        {/foreach}

    </div>
  </div>
