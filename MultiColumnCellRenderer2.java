import java.awt.*;
import javax.swing.*;

public class MultiColumnCellRenderer2 extends JPanel implements ListCellRenderer
{
	JLabel label;

	public MultiColumnCellRenderer2()
	{
		setBackground(Color.GREEN);
		label = new JLabel();
		add(label);
	}

	public Component getListCellRendererComponent(JList list, Object value, int index, boolean isSelected, boolean cellHasFocus)
	{
		label.setText(value.toString());

		super.setEnabled(list.isEnabled());
		super.setFont(list.getFont());

		return this;
	}
}

