mori,yama = gets.split(" ").map &:to_i
evis = gets.split(" ").map &:to_i
jap = gets.split(" ").map &:to_i

evija = evis.push(jap)
evija = evis.flatten!.sort

fuji = Hash.new(0)
evija.each do |evisjap|
  fuji[evisjap] += 1
end

fuji.each { | key, value|
  if value %2 != 0
    print "#{key} "
  end
}
