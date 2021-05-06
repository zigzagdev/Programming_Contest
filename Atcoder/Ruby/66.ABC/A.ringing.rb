a,b,c=gets.split(" ").map &:to_i

first=(a+b)
seconde=(a+c)
third=(b+c)

array=[first,seconde,third]
puts array.min