<div id="wrapper">
      <div id="content">
          <h2>DISCLAIMER</h2>
          <p class="thick">THIS SITE IS A SCHOOL PROJECT </p>
          <p>
            MY Band provides the <a href="http://ma.kampmeijer.nl/myband/">MY Band</a> Web site as a service to the public and Web site owners. <br />
            MY Band is not responsible for, and expressly disclaims all liability for, damages of any kind arising out of use, <br />
            reference to, or reliance on any information contained within the site. <br />
            While the information contained within the site is periodically updated, no guarantee is given that the information <br />
            provided in this Web site is correct, complete, and up-to-date. <br /> <br />
            Although the MY Band Web site may include links providing direct access to other Internet resources, including Web sites, <br />
            MY Band is not responsible for the accuracy or content of information contained in these sites. <br /> <br />
            Links from MY Band to third-party sites do not constitute an endorsement by MY Band of the parties or <br />
            their products and services. The appearance on the Web site of advertisements and product or service information <br />
            does not constitute an endorsement by MY Band, and MY Band has not investigated the claims made by any advertiser. <br />
            Product information is based solely on material received from suppliers.
          </p>
      </div>
      <div id="sidebar">
        <h3>Pictures of the week:</h3>

          {foreach from=$result_list2 item=image}
            <img class="grow" src="{$image.image}" alt="{$image.alt}" /> <br />
          {/foreach}

      </div>
    </div>
