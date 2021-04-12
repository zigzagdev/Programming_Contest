a,b,c,d=gets.split(" ").map &:to_f

m=(a/d).ceil
n=(c/b).ceil

if m>=n
  puts "Yes"
else
  puts "No"
end

