

<div class="portfolio">
    <div id='ptitle'>{players} <p> 's Portfolio</p></div>
    <div id="trading">
        <p class='portfolioTitle'> Trading Activities </p>
        <table class="table">
            <tr>
                <th>DateTime</th>
                <th>Player</th>
                <th>Series</th>
                <th>Transaction</th>
            </tr>
            {transactions}
            <tr>
                <td>{DateTime}</td>
                <td>{Player}</td>
                <td>{Series}</td>
                <td>{Trans}</td>
            </tr>
            {/transactions}
        </table>

    </div>           

    <div id="holdings">
        <p class='portfolioTitle'> Current Holdings </p>
        <table>
            
            <tr>
                <th>Series</th>
                <th>Top piece</th>
                <th>Middle piece</th>
                <th>Bottom piece</th>
            </tr>
            <tr>
                <td>11a</td>
                <td class="holdings"><img src="/asset/images/Eleven-A0.jpeg" title="11a-0"/> <br />{elevena0}</td>
                <td class="holdings"><img src="/asset/images/Eleven-A1.jpeg" title="11a-1"/> <br />{elevena1}</td>
                <td class="holdings"><img src="/asset/images/Eleven-A2.jpeg" title="11a-2"/> <br />{elevena2}</td>
            </tr>
            <tr>
                <td>11b</td>
                <td class="holdings"><img src="/asset/images/Eleven-B0.jpeg" title="11b-0"/> <br />{elevenb0}</td>
                <td class="holdings"><img src="/asset/images/Eleven-B1.jpeg" title="11b-1"/> <br />{elevenb1}</td>
                <td class="holdings"><img src="/asset/images/Eleven-B2.jpeg" title="11b-2"/> <br />{elevenb2}</td>
            </tr>
            <tr>
                <td>11c</td>
                <td class="holdings"><img src="/asset/images/Eleven-C0.jpeg" title="11c-0"/> <br />{elevenc0}</td>
                <td class="holdings"><img src="/asset/images/Eleven-C1.jpeg" title="11c-1"/> <br />{elevenc1}</td>
                <td class="holdings"><img src="/asset/images/Eleven-C2.jpeg" title="11c-2"/> <br />{elevenc2}</td>
            </tr>
            <tr>
                <td>13c</td>
                <td class="holdings"><img src="/asset/images/Thirteen-C0.jpeg" title="13c-0"/> <br />{thirteenc0}</td>
                <td class="holdings"><img src="/asset/images/Thirteen-C1.jpeg" title="13c-1"/> <br />{thirteenc1}</td>
                <td class="holdings"><img src="/asset/images/Thirteen-C2.jpeg" title="13c-2"/> <br />{thirteenc2}</td>
            </tr>
            <tr>
                <td>13d</td>
                <td class="holdings"><img src="/asset/images/Thirteen-D0.jpeg" title="13d-0"/> <br />{thirteend0}</td>
                <td class="holdings"><img src="/asset/images/Thirteen-D1.jpeg" title="13d-1"/> <br />{thirteend1}</td>
                <td class="holdings"><img src="/asset/images/Thirteen-D2.jpeg" title="13d-2"/> <br />{thirteend2}</td>
            </tr>
            <tr>
                <td>26h</td>
                <td class="holdings"><img src="/asset/images/TwentySix-H0.jpeg" title="26h-0"/> <br />{twentysixh0}</td>
                <td class="holdings"><img src="/asset/images/TwentySix-H1.jpeg" title="26h-1"/> <br />{twentysixh1}</td>
                <td class="holdings"><img src="/asset/images/TwentySix-H2.jpeg" title="26h-2"/> <br />{twentysixh2}</td>
            </tr>

        </table>
    </div>
</div>


