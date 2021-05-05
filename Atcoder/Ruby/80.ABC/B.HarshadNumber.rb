n=gets.to_i
integer=n
string=n.to_s

strings=string.split(//)

integers = []
for n in strings
  integers.push(n.to_i)
end
integers=integers.inject(:+)

if(integer%integers==0)
  puts "Yes"
else
  puts "No"
end