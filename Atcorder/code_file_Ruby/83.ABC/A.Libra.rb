a,b,c,d=gets.split.map(&:to_i)

case when
(a+b)<(c+d)
       puts "Right"
when
(a+b)===(c+d)
  puts "Balanced"
when
(a+b)>(c+d)
  puts "Left"
end
