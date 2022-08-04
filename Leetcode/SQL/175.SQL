SELECT
        firstName
        , lastname
        , city
        , state
    FROM
        Person
LEFT JOIN
    ON
        Person.personId = Address.personId
;