<form action="thanks.php" method="POST">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <select name="sujet">
            <option value="sujet1">J'ai perdue mon chient</option>
            <option value="sujet2">Ou es la petite souris</option>
            <option value="sujet3">Comment dresser un chat</option>
            <option value="sujet4">est ce qu'une croquette peu périmer ?</option>
        </select>
    </div>
    <div>
        <label for="courriel">Télépone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>

</form>