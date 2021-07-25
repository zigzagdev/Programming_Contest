fuji,kes,moriyama = gets.split.map(&:to_i)
evis =[]

range = 1..fuji
range.each do |i|
  if (fuji%i == 0 )
    evis<< i
  end
end

jap = []
range = 1..kes
range.each do |i|
  if (kes%i == 0 )
    jap<< i
  end
end

evisjap = evis & jap
p evisjap.reverse[moriyama-1]
