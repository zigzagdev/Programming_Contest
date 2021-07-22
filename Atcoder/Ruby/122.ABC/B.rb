kes = gets.chomp.split(//)

evis = 0
jap = 0
kes.each do  |i|
  if 'ATGC'.include?(i)
    jap += 1
  else
    evis = [jap,evis].max
    jap = 0
  end
end
evis = [jap,evis].max

p evis
