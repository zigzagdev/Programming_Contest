s=gets.chomp

count=s.length
range= 1..count

range.each do |a|
  print s.replace("x")
end

