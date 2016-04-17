<h1>Administrative Page</h1>

<!--display player info-->
<table id="playerInfo">
    <tr>
        <th>Player</th>
        <th>Peanuts</th>
        <th>Password</th>
        <th>Role</th>
        <th>Avatar</th>
    </tr>
    {playerinfo}
    <tr>
        <td class="playername">{playername}</td>
        <td class="peanuts">{playerpeanuts}</td>
        <td class="password">{playerpassword}</td>
        <td class="role">{playerrole}</td>
        <td class="avatar">{playeravatar}</td>
    </tr>
    {/playerinfo}
</table>
<table id="adminFunction">
    <form action="/admin/changePassword" method="post">
        <tr>
            <th colspan="2">change User password</th>
        </tr>
        <tr>
            <td>Player Name</td>
            <td><input type="text" name="playername"/></td>
        </tr>
        <tr>
            <td>Change password to:</td>
            <td><input type="text" name="playerpassword"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="enter"></td>
        </tr>
    </form>
    <form action="/admin/deleteUser" method="post">
        <tr>
            <th colspan="2">delete player</th>
        </tr>
        <tr>
            <td>Player Name</td>
            <td><input type="text" name="playername"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="enter"></td>
        </tr>
    </form>
    <form action="/admin/changeRole" method="post">
        <tr>
            <th colspan="2">change player role</th>
        </tr>
        <tr>
            <td>Player Name</td>
            <td><input type="text" name="playername"/></td>
        </tr>
        <tr>
            <td>Player Role</td>
            <td>
                <input type="radio" name="playerrole" value="admin">ADMIN<br />
                <input type="radio" name="playerrole" value="user">USER
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="enter"></td>
        </tr>
    </form>

</table>