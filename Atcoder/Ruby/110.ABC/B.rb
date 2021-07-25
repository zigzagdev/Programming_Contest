fuji,kes,mori,yama = gets.split.map(&:to_i)
evis = gets.split.map(&:to_i)
evis2 = evis.sort
jap = gets.split.map(&:to_i)
jap2 = jap.sort

range =  -100..100
range.each do |i|
  if(mori<i && i<=yama && evis2[-1]<i && i<=jap2[0])
    puts "No War"
    exit
  end
end
puts "War"
