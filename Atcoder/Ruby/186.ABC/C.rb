
kes = gets.to_i
fuji = kes

(1..kes).each do |i|
  if i.to_s(10).include?('7')
    fuji -=1
  elsif (i.to_s(8).include?('7'))
    fuji -= 1
  else
    fuji -= 0
  end
end
p fuji

