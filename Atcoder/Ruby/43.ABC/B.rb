kes = gets.chomp

fuji = kes.split(//)

evis=[]
fuji.each do |i|
  if i == '0'
    evis.push(0)
  elsif i == '1'
    evis.push(1)
  else
    evis.delete_at(-1)
  end
end
puts evis.join
