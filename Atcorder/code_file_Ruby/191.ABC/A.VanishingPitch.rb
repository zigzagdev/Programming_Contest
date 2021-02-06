V,T,S,D=gets.split(" ").map &:to_i


if V*T <= D && V*S >= D
  puts "No"
else
  puts "Yes"
end
