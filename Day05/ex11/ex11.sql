/*
SELECT UPPER(user_card.last_name) AS 'NAME', user_card.first_name, subscription.price
    FROM db_soyster.member
    INNER JOIN subscription ON subscription.id_sub = member.id_sub
    INNER JOIN user_card ON user_card.id_user = member.id_user_card
    WHERE price > 42
    ORDER BY user_card.last_name ASC, user_card.first_name ASC;
*/

SELECT UPPER(user_card.last_name) AS NAME, user_card.first_name, subscription.price
FROM user_card
INNER JOIN db_soyster.member ON user_card.id_user = member.id_member
INNER JOIN subscription ON member.id_member = subscription.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name ASC;